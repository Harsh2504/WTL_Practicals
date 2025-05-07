<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text"/>
    
    <xsl:template match="/">
        <xsl:apply-templates select="employees/employee"/>
    </xsl:template>

    <xsl:template match="employee">
        Name: <xsl:value-of select="name"/>
        Position: <xsl:value-of select="position"/>
        Department: <xsl:value-of select="department"/>
        Hired in: <xsl:value-of select="hire_year"/>
        Salary: <xsl:value-of select="salary"/>
    </xsl:template>
</xsl:stylesheet>
