				ASSIGNMENT - 2


Sol 1. Both the commands do the same thing, they tell how the initial file differs from the final files. It's just that to use "git diff --staged", we will have to use "git add filename" first.
	So, in a way, this one line: git diff HEAD 
	is same as these two lines: git add filename
				    git diff --staged

Sol 2.
	a) INLINE STYLING
	   <p style="font-family:comicsansms; font-size:16px;">

	b) INTERNAL STYLING
	   <style>
		p{	
			font-family:comicsansms;
			font-size:16px;
		}
	   </style>
		
	c) EXTERNAL STYLING
	   (i) CSS:
 	       	   Make new file and save it as .css extension.
		   Then type the css styling in it:
			p{	
				font-family:comicsansms;
				font-size:16px;
			}
		   Then in your HTML file, attach the following in the "HEAD" tag.
		   <link rel="stylesheet" type="text/css" href="filename.css">
	   (ii) JS:
 	       	   Make new file and save it as .js extension.
		   Then type the code in it:
		   function submitted(){
			let p = document.querySelector('#val').value
			let q = document.querySelector('#val1').value
			document.querySelector("#output").innerHTML = p
			document.querySelector("#output1").innerHTML = q
		   }
		   Then in your HTML file, attach the following in the "HEAD" tag.
		   <script type="text/javascript" src="filename.js"></script>

Sol 3. The border can be removed by using " border-collapse: collapse; " in the styling of table.

Sol 4. DONE.

Sol 5. 