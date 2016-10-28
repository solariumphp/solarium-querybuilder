# solarium-querybuilder

Solarium extension that adds support to build a Solarium query instance by parsing a Solr request

A limited set of Select query features has been implemented:
 
* basic params (like sort, start, rows, fl, df, fq)
* edismax
* facets (except for interval facets)
* grouping

**WARNING:** This extension is in it's early stages and still a bit experimental. Test your usecases extensively!