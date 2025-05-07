<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Gamer Details</title>
                <style><![CDATA[
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #1e1e2f;
                        color: white;
                        text-align: center;
                    }
                    h1 {
                        color: #f39c12;
                    }
                    table {
                        width: 70%;
                        margin: auto;
                        border-collapse: collapse;
                        background-color: #2c3e50;
                        color: white;
                    }
                    th, td {
                        border: 1px solid #f39c12;
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #e67e22;
                        color: black;
                    }
                    tr:nth-child(even) {
                        background-color: #34495e;
                    }
                    tr:hover {
                        background-color: #16a085;
                        color: black;
                    }
                ]]></style>
            </head>
            <body>
                <h1>Gamer List</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Team</th>
                        <th>Game</th>
                        <th>Join Year</th>
                        <th>Earnings</th>
                    </tr>
                    <xsl:for-each select="gamers/gamer">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="role"/></td>
                            <td><xsl:value-of select="team"/></td>
                            <td><xsl:value-of select="game"/></td>
                            <td><xsl:value-of select="join_year"/></td>
                            <td>$<xsl:value-of select="earnings"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
