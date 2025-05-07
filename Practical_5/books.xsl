<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>Manga Library</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f9f9f9;
                        padding: 20px;
                    }
                    h2 {
                        color: #333;
                    }
                    ul {
                        list-style-type: square;
                        padding-left: 20px;
                    }
                    li {
                        margin-bottom: 8px;
                        color: #555;
                    }
                </style>
            </head>
            <body>
                <h2>Manga Titles</h2>
                <ul>
                    <xsl:for-each select="library/book">
                        <li>
                            <strong><xsl:value-of select="title"/></strong> by 
                            <em><xsl:value-of select="author"/></em> — 
                            $<xsl:value-of select="price"/>
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
