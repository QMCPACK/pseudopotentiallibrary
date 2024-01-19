<!-- Markdown/HTML/Text can go here to be shown below the recipes -->
## Available ECPs and pseudopotentials

* ccECPs from Haihan Zhou et al. [arxiv (2023)](https://arxiv.org/abs/2309.12145)
* ccECP-soft from Benjamin Kincaid et al. specifically developed for plane wave calculations. [J. Chem. Phys. 157, 174307 (2022)](https://doi.org/10.1063/5.0109098)
* ccECPs from Guangming Wang et al. [Journal of Chemical Physics 157 054101 (2022)](https://doi.org/10.1063/5.0087300)
* ccECPs from Guangming Wang et al. [Journal of Chemical Physics 151, 144110 (2019)](https://doi.org/10.1063/1.5121006)
* ccECPs from Abdulgani Annaberdiyev et al. [Journal of Chemical Physics 149, 134108 (2018)](https://doi.org/10.1063/1.5040472) 
* ccECPs from Chandler Bennett et al. [Journal of Chemical Physics 149, 104108 (2018)](https://doi.org/10.1063/1.5038135) 
* ccECPs from Chandler Bennett et al. [Journal of Chemical Physics 147, 224106 (2017)](https://doi.org/10.1063/1.4995643)
* eCEPPs from Trail and Needs [Journal of Chemical Physics 146, 204107 (2017)](https://doi.org/10.1063/1.4984046)
* RRKJ and TM based potentials from Krogel et al. [Physical Review B 93, 075143 (2016)](https://doi.org/10.1103/PhysRevB.93.075143)
* CEPPs from Trail and Needs [Journal of Chemical Physics 142, 064110 (2015)](https://doi.org/10.1063/1.4907589)

## Help and feedback

Create an issue on the [GitHub site](https://github.com/QMCPACK/pseudopotentiallibrary/issues) or contact the developers of the potential you are interested in.

## Contributing

Contributions of potentials developed for high-accuracy many-body and quantum chemical techniques are welcomed. We will give full attribution and links to published papers, relevant source codes, more extensive datasets etc. 
If you have a dataset, please create a pull request on the [GitHub site](https://github.com/QMCPACK/pseudopotentiallibrary/pulls) from a forked and branched copy of the repo. [Create an issue](https://github.com/QMCPACK/pseudopotentiallibrary/issues) for help with this or to discuss a contribution. 

## Roadmap

* Additional elements will be prioritized and added based on requests. Create an issue if you need an element.
* As implementations of spin-orbit are made in many-body codes such as QMCPACK, appropriate formats will be determined and new potentials incorporating spin-orbit will be added.

## News and Major Updates

* 2024-01-19 Added selected lanthanides and heavy elements ccECPs from Haihan Zhou et al. [arxiv (2023)](https://arxiv.org/abs/2309.12145)
* 2022-09-01 Added softer potentials designed for plane-wave calculations from [J. Chem. Phys. 157, 174307 (2022)](https://doi.org/10.1063/5.0109098)
* 2022-05-13 Added Gaussian format conversions of ccECPs and their basis sets courtesy [addman2 on GitHub](https://github.com/addman2)
* 2022-04-04 Added selected heavy elements spin-orbit ccECPs from G. Wang et al. (2022) 
* 2019-07-19 Added 3rd-row main group and additional 1st-row ccECPs from G. Wang et al. (2019) 
* 2018-11-01 Added Hydrogen ccECP from A. Annaberdiyev et al. (2018) 
* 2018-10-15 Update 2nd row He-core ccECPs to be consistent with JCP (2018) potentials. 
* 2018-05-21 Added ccECPs for 2nd and 3rd row from Abdulgani Annaberdiyev (2018) and Chandler Bennett (2018).
* 2018-04-12 Added Trail-Needs CEPP (2015) and eCEPP (2017) potentials, basis sets, and orbitals.
* 2018-02-22 Add RRKJ and TM potentials for 3d elements.
* 2018-02-20 Initial public version with ccECPs.
