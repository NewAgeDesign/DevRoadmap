<?PHP
/* 
You can output Information in two ways, there's echo and print
They are both the same, except for a few small difference:
- Echo has no return Value where as Print has a return value of 1, allowing it to be used in expressions (we'll learn about those later)
- Echo can take multiple parameters whereas print only takes one arguement.
- Echo is marginaly faster than Print.
*/
// Echo can be written as either one of the following, and yes, it also supports HTML:
echo "Hello World \r\n";
echo("Hello World \r\n");
echo "different values "."are joined together in echo "."using the period symbol(.) \r\n";

// The same works for print
print "Hello World \r\n";
print("Hello World \r\n");
print "different values "."are joined together in echo "."using the period symbol(.) \r\n";

// When to use Print and Echo
?>
