#!/bin/bash

#~~~~~~~~~~~~~~~~~ Input ~~~~~~~~~~~~~~~~~~~~~~~~~~

declare -a basis=("DZ" "TZ" "QZ" "5Z")
declare -a ptable=("Sc" "Ti" "V" "Cr" "Mn" "Fe" "Co" "Ni" "Cu" "Zn")


#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

for i in "${ptable[@]}"
do
	cd ${i}/ccECP/
	echo ${i}
	for k in "${basis[@]}"
	do
		echo ${k}
		molpro2gamess.py ${i}.cc-pCV${k}.molpro > ${i}.cc-pCV${k}.gamess
		molpro2gamess.py ${i}.aug-cc-pCV${k}.molpro > ${i}.aug-cc-pCV${k}.gamess

		molpro2nwchem.py ${i}.cc-pCV${k}.molpro > ${i}.cc-pCV${k}.nwchem
		molpro2nwchem.py ${i}.aug-cc-pCV${k}.molpro > ${i}.aug-cc-pCV${k}.nwchem
	done
	cd ../../
done

