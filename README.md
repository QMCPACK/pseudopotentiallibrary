## Welcome to Pseudopotentials Library

This is the guide for managing this website and its components. Please refrain from editing any files outside of the **includes** and **recipes** folders.


### Managing Recipe Content
Inside the **recipes** folder is a very particular structure pattern. This structure is key to having data appear properly on the website.

To create a new active element on the periodic table, add a new folder to the root **recipes** folder with the standard name of the element. Ex: **recipes/Nitrogen**

To include information about the element, in the root folder of the element, include a text file. The name of this file is irrelevant. Ex: **recipes/Nitrogen/info.txt**

To include recipes for the element, create a new folder in the root folder of the element, titled the display name of the recipe. Include all relevant recipe files in the root folder of the recipe, to have them displayed as a group on the web page. To include a contributor name for the recipe, include a file named **author.txt**, this name is specific and important.

	recipes/Nitrogen/FirstRecipe/
	recipes/Nitrogen/FirstRecipe/author.txt
	recipes/Nitrogen/FirstRecipe/firstFile.txt
	recipes/Nitrogen/FirstRecipe/supportingFile.txt

The folder structure will resemble the diagram below:

	recipes/
	├── Argon/
	│   ├── the main recipe/
	│   │   ├── author.txt
	│   │   └── main recipe file.txt
	│   ├── another recipe/
	│   │   ├── author.txt
	│   │   ├── main recipe file.txt
	│   │   └── supporting recipe file.txt
	│   └── backup recipe/
	│       ├── informative file.txt
	│       ├── main recipe file.txt
	│       ├── supporting recipe1.txt
	│       └── supporting recipe file.txt
	├── Carbon/
	│   ├── info.txt
	│   ├── recipe 1/
	│   │   ├── author.txt
	│   │   └── main recipe file.txt
	│   └── recipe 2/
	│       ├── main recipe file.txt
	│       ├── supporting recipe1.txt
	│       ├── supporting recipe2.txt
	│       └── supporting recipe3.txt
	└── Nitrogen/
	    ├── info.txt
	    └── recipe/
	        ├── author.txt
	        ├── main recipe file.txt
	        ├── supporting recipe1.txt
	        └── supporting recipe2.txt

### Updating Index Page Content
Inside the **includes** folder there are three PHP files, which are intended to be used for adding content to the index page. Please refrain from editing the index file itself. HTML, Markdown, or plain text can be entered into these, and they will display on the index page.

- Above will display its file contents _above_ the periodic table, but _below_ the page title.
- Middle will display its file contents _below_ the periodic table, but _above_ the recipe results.
- Below will display its file contents _below_ the recipe results at the bottom of the page.
