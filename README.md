# JSON-LD in the wild

Real world JSON-LD examples we can use for inspiration. She of these examples may no longer be available, or have changed.

## Catalogue of Life

Based on TaxonName DRAFT Profile [0.1-DRAFT](https://bioschemas.org/profiles/TaxonName/0.1-DRAFT/) and [0.6-RELEASE](https://bioschemas.org/profiles/Taxon/0.6-RELEASE/).

Embedded in HTML using `<script type="application/ld+json"></script>` tags, e.g. https://www.catalogueoflife.org/data/taxon/5TVFG

:x: No `@id` for the taxon, so the JSON-LD below is not explicitly connected to https://www.catalogueoflife.org/data/taxon/5TVFG

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

## Encyclopedia of Life (EOL)

EOL used to support JSON-LD via their API (trait bank). They had JSON-LD for taxa, and for “collections”.

:x: This JSON-LD is not valid, see https://github.com/EOL/deprecated_eol/issues/139

[116394-unsorted.json](116394-unsorted.json)
[10692652-taxon-traits.json](10692652-taxon-traits.json)

```json
{
  "@context": {
    "@vocab": "http://schema.org/",
    "dwc:taxonID": {
      "@type": "@id"
    },
    "dwc:resourceID": {
      "@type": "@id"
    },
    "dwc:relatedResourceID": {
      "@type": "@id"
    },
    "dwc:relationshipOfResource": {
      "@type": "@id"
    },
    "dwc:vernacularName": {
      "@container": "@language"
    },
    "eol:associationType": {
      "@type": "@id"
    },
    "rdfs:label": {
      "@container": "@language"
    },
    "dc": "http://purl.org/dc/terms/",
    "dwc": "http://rs.tdwg.org/dwc/terms/",
    "eolterms": "http://eol.org/schema/terms/",
    "eol": "http://eol.org/schema/",
    "rdfs": "http://www.w3.org/2000/01/rdf-schema#",
    "gbif": "http://rs.gbif.org/terms/1.0/",
    "foaf": "http://xmlns.com/foaf/0.1/"
  },
  "@type": "DataFeedItem",
  "dateModified": "2016-09-11",
  "item": {
    "@id": 10692652,
    "@type": "dwc:Taxon",
    "scientificName": "Synallaxis beverlyae",
    "dwc:taxonRank": "species",
    "dwc:parentNameUsageID": "http://eol.org/pages/15003",
    "potentialAction": {
      "@type": "EntryPoint",
      "target": {
        "@type": "Related",
        "url": "http://eol.org/pages/10692652",
        "actionPlatform": [
          "http://schema.org/DesktopWebPlatform",
          "http://schema.org/IOSPlatform",
          "http://schema.org/AndroidPlatform"
        ]
      }
    },
    "sameAs": [
      "http://www.birdlife.org/datazone/speciesfactsheet.php?id=32678",
      "http://lod.taxonconcept.org/ses/voUQo.html",
      "http://www.iucnredlist.org/apps/redlist/details/22736309",
      "http://www.iucnredlist.org/apps/redlist/details/22736309",
      "http://en.wikipedia.org/w/index.php?title=Río_Orinoco_Spinetail"
    ],
    "vernacularNames": [{
      "@language": "en",
      "@value": "Rio Orinoco Spinetail",
      "gbif:isPreferredName": true
    }],
    "traits": [{
        "@id": "http://eol.org/pages/10692652/data#data_point_38830289",
        "eol:traitUri": "http://eol.org/resources/737/measurements/a2d4b468c0c1724d9909c352ba147e28",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "population trend",
        "dwc:measurementType": "http://iucn.org/population_trend",
        "value": "Stable",
        "eol:dataPointId": 38830289,
        "dc:source": "http://eol.org/resources/737",
        "dwc:measurementValue": "Stable",
        "dwc:scientificName": "Synallaxis beverlyae Hilty and Ascanio, 2009"
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_38830288",
        "eol:traitUri": "http://eol.org/resources/737/measurements/df109fa354806cc41182a5ae52c6c96e",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "freshwater habitat",
        "eol:dataPointId": 38830288,
        "dc:source": "http://eol.org/resources/737",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00002037",
        "dwc:scientificName": "Synallaxis beverlyae Hilty and Ascanio, 2009"
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_38830287",
        "eol:traitUri": "http://eol.org/resources/737/measurements/4d8a9afd7921c5dceee23a5775690dc1",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "terrestrial habitat",
        "eol:dataPointId": 38830287,
        "dc:source": "http://eol.org/resources/737",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00002009",
        "dwc:scientificName": "Synallaxis beverlyae Hilty and Ascanio, 2009"
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_38830282",
        "eol:traitUri": "http://eol.org/resources/737/measurements/052e1f75ae81ba93fe1efa0f89ee05a0",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "conservation status",
        "dwc:measurementType": "http://rs.tdwg.org/ontology/voc/SPMInfoItems#ConservationStatus",
        "value": "near threatened",
        "eol:dataPointId": 38830282,
        "dc:source": "http://eol.org/resources/737",
        "dwc:measurementValue": "http://eol.org/schema/terms/nearThreatened",
        "dwc:scientificName": "Synallaxis beverlyae Hilty and Ascanio, 2009",
        "eolterms:Reviewer": "Butchart, S. & Symes, A.",
        "eolterms:Assessor": "BirdLife International",
        "eolterms:Version": "3.1",
        "dwc:measurementRemarks": "Older designation \"Lower Risk/near threatened (LR/nt)\" indicates this species has not been reevaluated since 2000",
        "dwc:measurementDeterminedDate": "2012"
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749503",
        "eol:traitUri": "http://eol.org/resources/708/measurements/e6a76d8356a3c76680b5e1cb2235de29",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "scrubland",
        "eol:dataPointId": 11749503,
        "dc:source": "http://eol.org/pages/10692652/details#wikipedia",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000300",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"scrub\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749504",
        "eol:traitUri": "http://eol.org/resources/708/measurements/201ecee567b595ba41421794d5893fec",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "river island",
        "eol:dataPointId": 11749504,
        "dc:source": "http://eol.org/pages/10692652/details#wikipedia",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000423",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"river island\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749505",
        "eol:traitUri": "http://eol.org/resources/708/measurements/61fb0d77cda3935667846f1a03361d2b",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "fresh water",
        "eol:dataPointId": 11749505,
        "dc:source": "http://eol.org/pages/10692652/details#habitat",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00002011",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"freshwater\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749506",
        "eol:traitUri": "http://eol.org/resources/708/measurements/646d3b69cfa290d514bc8221df880d08",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "terrestrial biome",
        "eol:dataPointId": 11749506,
        "dc:source": "http://eol.org/pages/10692652/details#habitat",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000446",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"terrestrial\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749507",
        "eol:traitUri": "http://eol.org/resources/708/measurements/80d4bf0e130bf26c5097cf87a395b1b2",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "scrubland",
        "eol:dataPointId": 11749507,
        "dc:source": "http://eol.org/pages/10692652/details#habitat",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000300",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"shrubs\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749509",
        "eol:traitUri": "http://eol.org/resources/708/measurements/89ccc6312bf2b6b63d50e0b0e883bed6",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "island",
        "eol:dataPointId": 11749509,
        "dc:source": "http://eol.org/pages/10692652/details#distribution",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000098",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"islands\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749510",
        "eol:traitUri": "http://eol.org/resources/708/measurements/24386281fd237292f34992504cbddc29",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "island",
        "eol:dataPointId": 11749510,
        "dc:source": "http://eol.org/pages/10692652/details#distribution",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000098",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"island\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_11749511",
        "eol:traitUri": "http://eol.org/resources/708/measurements/bfa4484d7208b68fe331ab589abc332b",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "river",
        "eol:dataPointId": 11749511,
        "dc:source": "http://eol.org/pages/10692652/details#distribution",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000022",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"river\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_20808112",
        "eol:traitUri": "http://eol.org/resources/708/measurements/f615621a67a40bfc6223a731309a65de",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "river island",
        "eol:dataPointId": 20808112,
        "dc:source": "http://eol.org/pages/10692652/details#habitat",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000423",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"river islands\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_20808113",
        "eol:traitUri": "http://eol.org/resources/708/measurements/6965be271aba58db1e23a40437c3ebc2",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "habitat",
        "dwc:measurementType": "http://rs.tdwg.org/dwc/terms/habitat",
        "value": "channel",
        "eol:dataPointId": 20808113,
        "dc:source": "http://eol.org/pages/10692652/details#wikipedia",
        "dwc:measurementMethod": "text mining",
        "dwc:measurementValue": "http://purl.obolibrary.org/obo/ENVO_00000395",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "<a href=\"http://environments-eol.blogspot.com/2013/03/welcome-to-environments-eol-few-words.html\">Environments-EOL</a>",
        "dwc:measurementRemarks": "source text: \"channel\""
      },
      {
        "@id": "http://eol.org/pages/10692652/data#data_point_39814364",
        "eol:traitUri": "http://eol.org/resources/527/measurements/9ef025789cecd0b42eb55539d58c6987",
        "@type": "dwc:MeasurementOrFact",
        "predicate": "extinction status",
        "dwc:measurementType": "http://eol.org/schema/terms/ExtinctionStatus",
        "value": "extant",
        "eol:dataPointId": 39814364,
        "dwc:measurementValue": "http://eol.org/schema/terms/extant",
        "dwc:scientificName": "Synallaxis beverlyae",
        "dc:contributor": "The Cornell Lab of Ornithology: Clements Checklist",
        "source": "http://eol.org/resources/527"
      }
    ]
  }
}
```

## ORCID

ORCID supports JSON-LD via content negotiation, e.g.

```curl -L -H 'Accept: application/ld+json' https://orcid.org/0000-0002-2168-0514```

:warning: Note the use of `@reverse` to associate person with publications. There is no notion or order of authorship, and any other authors are not listed (even if they have ORCID’s).

[orcid](orcid.json)

```json
{
  "@context": "http://schema.org",
  "@type": "Person",
  "@id": "https://orcid.org/0000-0002-2168-0514",
  "mainEntityOfPage": "https://orcid.org/0000-0002-2168-0514",
  "givenName": "Mark",
  "familyName": "Hughes",
  "affiliation": {
    "@type": "Organization",
    "name": "Royal Botanic Garden Edinburgh",
    "identifier": {
      "@type": "PropertyValue",
      "propertyID": "RINGGOLD",
      "value": "41803"
    }
  },
  "@reverse": {
    "creator": [{
        "@type": "CreativeWork",
        "@id": "https://doi.org/10.1017/s0960428619000283",
        "name": "BEGONIA MAGUNIANA (BEGONIACEAE, BEGONIA SECT. OLIGANDRAE), A NEW SPECIES FROM NEW GUINEA",
        "identifier": {
          "@type": "PropertyValue",
          "propertyID": "doi",
          "value": "10.1017/s0960428619000283"
        }
      },
     …

    ]
  },
  "url": [
    "https://www.rbge.org.uk/about-us/organisational-structure/staff/tropical-diversity/dr-mark-hughes/",
    "https://www.mendeley.com/profiles/mark-hughes/"
  ],
  "identifier": [{
      "@type": "PropertyValue",
      "propertyID": "Loop profile",
      "value": "845425"
    },
    {
      "@type": "PropertyValue",
      "propertyID": "Loop profile",
      "value": "826408"
    }
  ]
}
```


## ResearchGate

At one point ResearchGate embedded schema.org in their web pages, but they seemed to have stopped doing this?

## SciGraph

```curl -L http://scigraph.springernature.com/pub.10.1007/s00606-016-1316-4.json```

## Zenodo

```curl -H 'Accept: application/ld+json' https://zenodo.org/api/records/3538376```