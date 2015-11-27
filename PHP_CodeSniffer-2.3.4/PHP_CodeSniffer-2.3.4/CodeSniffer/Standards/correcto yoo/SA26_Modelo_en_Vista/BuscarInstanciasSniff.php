<?php
/**
 * This sniff prohibits the use of Perl style hash comments.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   SVN: $Id: coding-standard-tutorial.xml,v 1.9 2008-10-09 15:16:47 cweiske Exp $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * This sniff prohibits the use of Perl style hash comments.
 *
 * An example of a hash comment is:
 *
 * <code>
 *  # This is a hash comment, which is prohibited.
 *  $hello = 'hello';
 * </code>
 * 
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Yii_Sniffs_SA26_Modelo_en_Vista_BuscarInstanciasSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * Returns the token types that this sniff is interested in.
     *
     * @return array(int)
     */
    public function register()
    {

        return array(T_STRING);


    }//end register()

    /**
     * Processes the tokens that this sniff is interested in.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where the token was found.
     * @param int                  $stackPtr  The position in the stack where
     *                                        the token was found.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $name = $phpcsFile->getFilename();
        $tokens = $phpcsFile->getTokens();
	echo "mamamamamma";
print_r ($tokens);
// 	$instancia =  
	
	//if ((strpos($name, "views")) ) {
  		
     		$error = 'Se creo una clase en el lugar incorrecto.; found %s';
                $data  = array(trim($tokens[$stackPtr]['content']));
                $phpcsFile->addError($error, $stackPtr, 'Found', $data);	
		
	//}//fin del if de la vista
/**
  $openBracket  = $tokens[$stackPtr]['parenthesis_opener'];
        $closeBracket = $tokens[$stackPtr]['parenthesis_closer'];

        $foundVariables = array();
        for ($i = ($openBracket + 1); $i < $closeBracket; $i++) {
            if ($tokens[$i]['code'] === T_VARIABLE) {
                $variable = $tokens[$i]['content'];
                if (in_array($variable, $foundVariables) === true) {
                    $error = 'Variable "%s" appears more than once in function declaration';
                    $data  = array($variable);
                    $phpcsFile->addError($error, $i, 'Found', $data);
                } else {
                    $foundVariables[] = $variable;
                }
            }
        }
**/




    }//end process()

	

}//end class

?>
