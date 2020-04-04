<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55dd6a1fc547a295547122e01b0a9f4b
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tools\\' => 6,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
            'PHPHtmlParser\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tools',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'PHPHtmlParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser',
        ),
    );

    public static $prefixesPsr0 = array (
        's' => 
        array (
            'stringEncode' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/string-encode/src',
            ),
        ),
    );

    public static $classMap = array (
        'PHPHtmlParser\\Content' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Content.php',
        'PHPHtmlParser\\Curl' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Curl.php',
        'PHPHtmlParser\\CurlInterface' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/CurlInterface.php',
        'PHPHtmlParser\\Dom' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom.php',
        'PHPHtmlParser\\Dom\\AbstractNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/AbstractNode.php',
        'PHPHtmlParser\\Dom\\ArrayNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/ArrayNode.php',
        'PHPHtmlParser\\Dom\\Collection' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/Collection.php',
        'PHPHtmlParser\\Dom\\HtmlNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/HtmlNode.php',
        'PHPHtmlParser\\Dom\\InnerNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/InnerNode.php',
        'PHPHtmlParser\\Dom\\LeafNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/LeafNode.php',
        'PHPHtmlParser\\Dom\\Tag' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/Tag.php',
        'PHPHtmlParser\\Dom\\TextNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/TextNode.php',
        'PHPHtmlParser\\Exceptions\\ChildNotFoundException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/ChildNotFoundException.php',
        'PHPHtmlParser\\Exceptions\\CircularException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/CircularException.php',
        'PHPHtmlParser\\Exceptions\\CurlException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/CurlException.php',
        'PHPHtmlParser\\Exceptions\\EmptyCollectionException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/EmptyCollectionException.php',
        'PHPHtmlParser\\Exceptions\\LogicalException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/LogicalException.php',
        'PHPHtmlParser\\Exceptions\\NotLoadedException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/NotLoadedException.php',
        'PHPHtmlParser\\Exceptions\\ParentNotFoundException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/ParentNotFoundException.php',
        'PHPHtmlParser\\Exceptions\\StrictException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/StrictException.php',
        'PHPHtmlParser\\Exceptions\\UnknownChildTypeException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/UnknownChildTypeException.php',
        'PHPHtmlParser\\Finder' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Finder.php',
        'PHPHtmlParser\\Options' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Options.php',
        'PHPHtmlParser\\Selector\\Parser' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Selector/Parser.php',
        'PHPHtmlParser\\Selector\\ParserInterface' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Selector/ParserInterface.php',
        'PHPHtmlParser\\Selector\\Selector' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Selector/Selector.php',
        'PHPHtmlParser\\StaticDom' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/StaticDom.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'stringEncode\\Encode' => __DIR__ . '/..' . '/paquettg/string-encode/src/stringEncode/Encode.php',
        'stringEncode\\Exception' => __DIR__ . '/..' . '/paquettg/string-encode/src/stringEncode/Exception.php',
        'tools\\core\\App' => __DIR__ . '/../..' . '/tools/core/App.php',
        'tools\\core\\Db' => __DIR__ . '/../..' . '/tools/core/Db.php',
        'tools\\core\\controllers\\Controller' => __DIR__ . '/../..' . '/tools/core/controllers/Controller.php',
        'tools\\core\\controllers\\Errors' => __DIR__ . '/../..' . '/tools/core/controllers/Errors.php',
        'tools\\core\\controllers\\Main' => __DIR__ . '/../..' . '/tools/core/controllers/Main.php',
        'tools\\core\\controllers\\Tool' => __DIR__ . '/../..' . '/tools/core/controllers/Tool.php',
        'tools\\core\\selby\\BaseTool' => __DIR__ . '/../..' . '/tools/core/selby/BaseTool.php',
        'tools\\core\\selby\\CodeResponser' => __DIR__ . '/../..' . '/tools/core/selby/CodeResponser.php',
        'tools\\core\\selby\\Decoder' => __DIR__ . '/../..' . '/tools/core/selby/Decoder.php',
        'tools\\core\\selby\\IOHandler' => __DIR__ . '/../..' . '/tools/core/selby/IOHandler.php',
        'tools\\core\\selby\\SitemapMaker' => __DIR__ . '/../..' . '/tools/core/selby/SitemapMaker.php',
        'tools\\core\\selby\\SitemapMaker\\SitemapHtmlMaker' => __DIR__ . '/../..' . '/tools/core/selby/SitemapMaker/SitemapHtmlMaker.php',
        'tools\\core\\selby\\SitemapMaker\\SitemapXmlMaker' => __DIR__ . '/../..' . '/tools/core/selby/SitemapMaker/SitemapXmlMaker.php',
        'tools\\core\\selby\\TagParser' => __DIR__ . '/../..' . '/tools/core/selby/TagParser.php',
        'tools\\core\\selby\\Transliter' => __DIR__ . '/../..' . '/tools/core/selby/Transliter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55dd6a1fc547a295547122e01b0a9f4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55dd6a1fc547a295547122e01b0a9f4b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit55dd6a1fc547a295547122e01b0a9f4b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit55dd6a1fc547a295547122e01b0a9f4b::$classMap;

        }, null, ClassLoader::class);
    }
}
