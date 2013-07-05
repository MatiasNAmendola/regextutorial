regextutorial
=============

Regular Meta Characters used in REGEX
----------------------

	^  matches the beggining of the string; Inside a set [ ] works as a NOT operator;<br/>
	$  matches the end of the string (reads newlines too); <br/>
	.  matches any single character, except line breaks; <br/>
	*  matches zero or more occurences of the character immediately before it; <br/>
	+  matches one or more occurences of the character immediately before it; <br/>
	?  matches 0 or 1 occurence of the character or regular expression immediately preceding it; <br/>
	[] matches a set of characters; <br/>
	\  used to scape meta characters and to escape all Meta characters including itself. \[\]; <br/>
	|  matches characters as an OR operator It's used with the () operator. Ex.'/(This|That)/' in 'This is what I like' match This; <br/>
	()  ; <br/>
	{} matches a specific number of instances of the preceding character or range of characters; <br/>

PHP special characters
======================

	\s matches any character, including line breaks. It's a flag for the . operator; <br/>
	\z matches the end of the string (doesn't read the new lines); <br/>
	/i matches insive characters (ABC = abc); <br/>
	\d matches any numeric character - same as [0-9]; <br/>
	\D matches any non-numeric character - same as [^0-9]; <br/>
	\s matches any whitespace character - sames as [\\t\\n\\r\\f\\v]; <br/>
	\S matches any non-whitespace character - same as [^ \\t\\n\\r\\f\\v]; <br/>
	\w matches any alphanumeric character - same as [a-zA-Z0-9_]; <br/>
	\W matches any non-alphanumeric character - same as [^a-zA-Z0-9_]; <br/>

Modifiers
---------

	i  Ignore Case, case insensitive; <br/>
	U  Make search ungreedy; <br/>
	s  Includes New line; <br/>
	m  Multiple lines; <br/>
	x  Extended for comments and whitespace; <br/>
	e  Enables evaluation of replacement as PHP code. (preg_replace only); <br/>
	S  Extra analysis of pattern; <br/>

Assertions
----------

	b  Word Boundry; <br/>
	B  Not a word boundary; <br/>
	A  Start of subject; <br/>
	Z  End of subject or newline at end; <br/>
	z  End of subject; <br/>
	G  First matching position in subject; <br/>
