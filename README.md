# JSON-LD in the wild

Real world JSON-LD examples we can use for inspiration. She of these examples may no longer be available, or have changed.

## Catalogue of Life

Based on TaxonName DRAFT Profile:
https://bioschemas.org/profiles/TaxonName/0.1-DRAFT/
https://bioschemas.org/profiles/Taxon/0.6-RELEASE/

Embedded in HTML using `<script type="application/ld+json"></script>` tags, e.g. https://www.catalogueoflife.org/data/taxon/5TVFG

:warning: No `@id` for the taxon, so the JSON-LD below is not explicitly connected to https://www.catalogueoflife.org/data/taxon/5TVFG

[col.json](col.json)

```json
{
  "@context": [
    "https://schema.org/",
    {
      "dwc": "http://rs.tdwg.org/dwc/terms/",
      "col": "http://catalogueoflife.org/terms/"
    }
  ],
  "@type": "Taxon",
  "additionalType": [
    "dwc:Taxon",
    "http://rs.tdwg.org/ontology/voc/TaxonConcept#TaxonConcept"
  ],
  "identifier": [{
      "@type": "PropertyValue",
      "name": "dwc:taxonID",
      "propertyID": "http://rs.tdwg.org/dwc/terms/taxonID",
      "value": "5TVFG"
    },
    {
      "@type": "PropertyValue",
      "name": "col:ID",
      "propertyID": "http://catalogueoflife.org/terms/ID",
      "value": "5TVFG"
    }
  ],
  "name": "Allacta deleportei Roth, L. M., 1995",
  "scientificName": {
    "@type": "TaxonName",
    "name": "Allacta deleportei",
    "author": "Roth, L. M., 1995",
    "taxonRank": "Species",
    "isBasedOn": {
      "@type": "ScholarlyArticle",
      "name": "Roth, L. M. New species of Allacta Saussure and Zehntner from Papua New Guinea, Irian Jaya, and Sarawak (Blattaria, Blattellidae: Pseudophyllodromiinae). Papua New Guinea J. Agric. 38:51-71. (1995)."
    }
  },
  "taxonRank": [
    "http://api.catalogueoflife.org/vocab/rank/Species",
    "Species"
  ],
  "parentTaxon": {
    "@type": "Taxon",
    "name": "Allacta",
    "scientificName": {
      "@type": "TaxonName",
      "name": "Allacta",
      "author": "",
      "taxonRank": "Genus"
    },
    "identifier": [{
        "@type": "PropertyValue",
        "name": "dwc:taxonID",
        "propertyID": "http://rs.tdwg.org/dwc/terms/taxonID",
        "value": "RZX"
      },
      {
        "@type": "PropertyValue",
        "name": "col:ID",
        "propertyID": "http://catalogueoflife.org/terms/ID",
        "value": "RZX"
      }
    ],
    "taxonRank": [
      "http://rs.gbif.org/vocabulary/gbif/rank/Genus",
      "Genus"
    ]
  }
}
```

## ORCID

```curl -L -H 'Accept: application/ld+json' https://orcid.org/0000-0002-8104-7761```

Note the use of `@reverse` to associate person with publications.

## ResearchGate

At one point ResearchGate embedded schema.org in their web pages, but they seemed to have stopped doing this?

## SciGraph

```curl -L http://scigraph.springernature.com/pub.10.1007/s00606-016-1316-4.json```

## Zenodo

```curl -H 'Accept: application/ld+json' https://zenodo.org/api/records/3538376```