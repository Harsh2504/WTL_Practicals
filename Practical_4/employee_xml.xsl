<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>
    
    <xsl:template match="/">
        <company>
            <xsl:apply-templates select="employees/employee"/>
        </company>
    </xsl:template>

    <xsl:template match="employee">
        <staff>
            <full_name><xsl:value-of select="name"/></full_name>
            <job_title><xsl:value-of select="position"/></job_title>
            <division><xsl:value-of select="department"/></division>
            <joining_year><xsl:value-of select="hire_year"/></joining_year>
            <income><xsl:value-of select="salary"/></income>
        </staff>
    </xsl:template>
</xsl:stylesheet>
