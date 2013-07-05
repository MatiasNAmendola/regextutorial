regextutorial
=============

This is a simple tutorial for those who wanna learn regular expressions and extend that knowledge to the PHP language.

Regular Meta Characters used in REGEX
----------------------

	^  matches the beggining of the string; Inside a set [ ] works as a NOT operator;
	$  matches the end of the string (reads newlines too);
	.  matches any single character, except line breaks;
	*  matches zero or more occurences of the character immediately before it;
	+  matches one or more occurences of the character immediately before it;
	?  matches 0 or 1 occurence of the character or regular expression immediately preceding it;
	[] matches a set of characters;
	\  used to scape meta characters and to escape all Meta characters including itself. \[\];
	|  matches characters as an OR operator It's used with the () operator. Ex.'/(This|That)/' in 'This is what I like' match This;
	()  ;
	{} matches a specific number of instances of the preceding character or range of characters;

PHP special characters
======================

	\s matches any character, including line breaks. It's a flag for the . operator;
	\z matches the end of the string (doesn't read the new lines);
	/i matches insive characters (ABC = abc);
	\d matches any numeric character - same as [0-9];
	\D matches any non-numeric character - same as [^0-9];
	\s matches any whitespace character - sames as [\\t\\n\\r\\f\\v];
	\S matches any non-whitespace character - same as [^ \\t\\n\\r\\f\\v];
	\w matches any alphanumeric character - same as [a-zA-Z0-9_];
	\W matches any non-alphanumeric character - same as [^a-zA-Z0-9_];

Modifiers
---------

	i  Ignore Case, case insensitive;
	U  Make search ungreedy;
	s  Includes New line;
	m  Multiple lines;
	x  Extended for comments and whitespace;
	e  Enables evaluation of replacement as PHP code. (preg_replace only);
	S  Extra analysis of pattern;

Assertions
----------

	b  Word Boundry;
	B  Not a word boundary;
	A  Start of subject;
	Z  End of subject or newline at end;
	z  End of subject;
	G  First matching position in subject;
