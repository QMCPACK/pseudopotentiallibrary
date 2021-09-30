import os
import re
import pathlib

g2g_path="g2g.py"
recipes_path="../recipes"

for d, dn, fn in os.walk(pathlib.Path(recipes_path).absolute()):
    for f in fn:
        if re.match('[A-z]{1,2}\.(aug-)?cc-p[A-Z1-9]+\.gamess', f):
            cmd =  ( f"cd {d};"
                     f"{g2g_path} -w bas -i {f} -o {f.replace('.gamess', '.gaussian')}")
            print(cmd)
            os.system(cmd)

        if re.match('[A-z]{1,2}\.ccECP.gamess', f):
            cmd =  ( f"cd {d};"
                     f"{g2g_path} -w ecp -i {f} -o {f.replace('.gamess', '.gaussian')}")
            print(cmd)
            os.system(cmd)
