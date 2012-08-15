#Precompiled .so files for MAMP on OSX 10.7+

##In your Terminal 
	- Brew install Pkg  
	- Start your Respective Daemon 
##Copy the . so file to the
	 /Applications/MAMP/bin//php/php5.3.6/lib/php/extensions/no-debug-non-zts-20090626/
	 	*	No-debug may be a slightly different name
##Modify your php.ini
In the following file:  **/Applications/MAMP/bin//php/php5.3.6/conf/php.ini**

add the line 
`extension=name.so`	
in the section<br>
`;;;;;;;;;;;;;;;;;;;;;;`<br>
`; Dynamic Extensions ;`<br>
`;;;;;;;;;;;;;;;;;;;;;;`

##Restart MAMP
	- you can run a phpinfo(); to see whether the Pkg loaded