#!/usr/bin/env python

info = { "authors" : [r"Otto Kohul\'{a}k"],
         "status"  : "This script was tested on:\n"
                     "\nBasis:\n"
                     " - H.ccECP.gamess\n"
                     " - O.ccECP.gamess\n"
                     " - S.ccECP.gamess\n"
                     "\nECPs:\n"
                     " - H.aug-cc-pVTZ.gamess\n"
                     " - O.aug-cc-pVTZ.gamess\n"
                     " - S.aug-cc-pVTZ.gamess\n"
                     "\n Report any issues to pravod@gmail.com\n"
                     "\n The script was NOT tested with python 2.x, please use python 3.5 or < \n"
      }

import argparse

def load_data_bas(s):
    orbital = None
    functions = []
    data = []
    for line in s.split("\n"):
        l = line.strip()
        if l == "": continue
        if l[0].isalpha():
            if orbital is not None:
                data.append([orbital, functions])
            orbital = l[0].lower()
            functions = []
            continue
        ws = list(map(float, l.split()))
        functions.append(ws[1:])
    data.append([orbital, functions])
    return data

def write_gaussian_bas(data, element):
    ret = ""
    ret += "{} 0\n".format(element)
    for orbital, functions in data:
        ret += "{} {} 1.00\n".format(orbital, len(functions))
        for f in functions:
            ret += "{:11.6f} {:11.8f}\n".format(*f).lstrip()
    ret += "****\n"
    return ret

def load_data_ecp(s):
    counter = 0
    nlines = 0
    linepars = []
    data = []
    for ii, line in enumerate(s.split("\n")):
        l = line.strip()
        if l == "": continue
        if ii == 0:
            dp = list(map(float, l.split()[2:]))
            continue
        if counter < 1:
            nlines = int(l)
            counter = nlines
            continue
        pars = l.split()
        pars[0] = float(pars[0])
        pars[1] = int(pars[1])
        pars[2] = float(pars[2])
        linepars.append(pars)
        counter -= 1
        if counter == 0:
            data.append([nlines, linepars])
            linepars = []
    return [dp, data]

def write_gaussian_ecp(data, element):
    ret = ""
    ret += "{} 0\n".format(element)
    ret += "QMC {} {}\n".format(int(data[0][1]), int(data[0][0]))
    for line, pars in data[1]:
        ret += "COMMENT LINE\n"
        ret += "{}\n".format(line)
        for linepars in pars:
            ret += "{:d} {:15.12f} {:15.12f}\n".format(linepars[1],
                                                      linepars[2],
                                                      linepars[0])
    ret += "\n"
    return ret

def guess_element(input_file):
    element = input_file.split(".")[0]
    if len(element) > 2:
        print("Could not guess the element")
        element = input("Please write the element: ")
    if len(element) > 2: print("Element should have two letter, but countinuing ... ({})".format(element))
    if len(element) == 0: print("Element should have two letter, but countinuing ... ({})".format(element))
    return element

parser = argparse.ArgumentParser(description='Gamess to Gaussian converter. '
                                 'Converts basis and ECP.',
                                 epilog = info["status"] + '\n\nGallia est omnis '
                                 'divisa in partes tres, quarum unam incolunt '
                                 'Belgae, aliam Aquitani, tertiam qui ipsorum '
                                 'lingua Celtae, nostra Galli appellantur.\n',
                                 formatter_class=argparse.RawTextHelpFormatter)
requiredNamed = parser.add_argument_group('required named arguments')
requiredNamed.add_argument('-i', '--input', help='Input file name', required=True)
requiredNamed.add_argument('-w', help='Work to be done', required=True, choices = ["bas", "ecp"])
parser.add_argument('-o', '--output', help='Output file name, if not stated it will be directed to stdout', default='stdout')

args = parser.parse_args()

load_data = load_data_bas
write_gaussian = write_gaussian_bas
if args.w == "ecp":
    load_data = load_data_ecp
    write_gaussian = write_gaussian_ecp

element = guess_element(args.input)

with open(args.input, "r") as fi:
    data = load_data(fi.read())
result = write_gaussian(data, element)

if args.output == "stdout":
    print(result)
else:
    with open(args.output, "w") as fo:
        fo.write(result)

