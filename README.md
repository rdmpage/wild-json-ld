# JSON-LD in the wild

Real world JSON-LD examples we can use for inspiration. Some of these examples may no longer be available, or have changed. The JSON displayed here may be truncated to keep the page readable, click on the link to get the complete JSON document. Note that some of the JSON-LD is not valid RDF, much of it has probably never been used by RDF clients such as triple stores.

I’ve highlighted some interesting features, such as use of the `@reverse` keyword, and ordering items in a list.

See also [mhausenblas/schema-org-rdf](https://github.com/mhausenblas/schema-org-rdf/tree/master/examples).

## Bionomia

JSON-LD for [https://bionomia.net/occurrence/477976412](477976412), see https://twitter.com/dpsSpiders/status/1431258387145179148?s=20

See also the discussion in https://github.com/bionomia/bionomia/issues/160 on JSON-LD, roles, and provenance, see "A Scalable Approach to Incrementally Building Knowledge Graphs" [10.1007/978-3-319-43997-6_15](https://doi.org/10.1007/978-3-319-43997-6_15) [PDF here](https://usc-isi-i2.github.io/papers/gleb16-tpdl.pdf).

- :x: Note that `recorded` includes attributes of the record (e.g., `created`) that apply to the person, not the record itself. 

[bionomia.json](bionomia.json)

```json
{
  "@context": {
    "@vocab": "http://schema.org/",
    "identified": "http://rs.tdwg.org/dwc/iri/identifiedBy",
    "recorded": "http://rs.tdwg.org/dwc/iri/recordedBy",
    "associatedReferences": "http://rs.tdwg.org/dwc/terms/associatedReferences",
    "PreservedSpecimen": "http://rs.tdwg.org/dwc/terms/PreservedSpecimen",
    "creator": "http://purl.org/dc/terms/creator",
    "created": "http://purl.org/dc/terms/created",
    "modified": "http://purl.org/dc/terms/modified",
    "datasetKey": "http://rs.tdwg.org/dwc/terms/datasetKey",
    "occurrenceID": "http://rs.tdwg.org/dwc/terms/occurrenceID",
    "basisOfRecord": "http://rs.tdwg.org/dwc/terms/basisOfRecord",
    "dateIdentified": "http://rs.tdwg.org/dwc/terms/dateIdentified",
    "decimalLatitude": "http://rs.tdwg.org/dwc/terms/decimalLatitude",
    "decimalLongitude": "http://rs.tdwg.org/dwc/terms/decimalLongitude",
    "country": "http://rs.tdwg.org/dwc/terms/country",
    "countryCode": "http://rs.tdwg.org/dwc/terms/countryCode",
    "eventDate": "http://rs.tdwg.org/dwc/terms/eventDate",
    "year": "http://rs.tdwg.org/dwc/terms/year",
    "kingdom": "http://rs.tdwg.org/dwc/terms/kingdom",
    "family": "http://rs.tdwg.org/dwc/terms/family",
    "identifiedBy": "http://rs.tdwg.org/dwc/terms/identifiedBy",
    "institutionCode": "http://rs.tdwg.org/dwc/terms/institutionCode",
    "collectionCode": "http://rs.tdwg.org/dwc/terms/collectionCode",
    "catalogNumber": "http://rs.tdwg.org/dwc/terms/catalogNumber",
    "recordedBy": "http://rs.tdwg.org/dwc/terms/recordedBy",
    "scientificName": "http://rs.tdwg.org/dwc/terms/scientificName",
    "typeStatus": "http://rs.tdwg.org/dwc/terms/typeStatus",
    "recordedByID": "http://rs.tdwg.org/dwc/terms/recordedByID",
    "identifiedByID": "http://rs.tdwg.org/dwc/terms/identifiedByID"
  },
  "@type": "PreservedSpecimen",
  "@id": "https://bionomia.net/occurrence/477976412",
  "sameAs": "https://gbif.org/occurrence/477976412",
  "datasetKey": "4bfac3ea-8763-4f4b-a71a-76a6f5f243d3",
  "occurrenceID": "MCZ:IZ:56126",
  "basisOfRecord": "PRESERVED_SPECIMEN",
  "dateIdentified": null,
  "decimalLatitude": "1.0922660027",
  "decimalLongitude": "11.2080719601",
  "country": "Equatorial Guinea",
  "countryCode": "GQ",
  "eventDate": "2010-03-09",
  "year": "2010",
  "kingdom": "Animalia",
  "family": "Corinnidae",
  "identifiedBy": "Charles Haddad",
  "institutionCode": "MCZ",
  "collectionCode": "IZ",
  "catalogNumber": "56126",
  "recordedBy": "Gonzalo Giribet, Carlos Prieto",
  "scientificName": "Medmassa",
  "typeStatus": null,
  "recordedByID": null,
  "identifiedByID": null,
  "recorded": [
    {
      "@type": "Person",
      "@id": "https://bionomia.net/0000-0002-5467-8429",
      "sameAs": "https://orcid.org/0000-0002-5467-8429",
      "givenName": "Gonzalo",
      "familyName": "Giribet",
      "name": "Gonzalo Giribet",
      "alternateName": [
        "Gonzalo Giribet de Sebastian"
      ],
      "creator": {
      },
      "created": "2018-10-20T14:30:53+00:00",
      "modified": null
    },
    {
      "@type": "Person",
      "@id": "https://bionomia.net/0000-0003-2064-4842",
      "sameAs": "https://orcid.org/0000-0003-2064-4842",
      "givenName": "Carlos",
      "familyName": "Prieto",
      "name": "Carlos Prieto",
      "alternateName": [

      ],
      "creator": {
        "@type": "Person",
        "@id": "https://bionomia.net/0000-0001-7618-5230",
        "sameAs": "https://orcid.org/0000-0001-7618-5230",
        "givenName": "David Peter",
        "familyName": "Shorthouse",
        "name": "David Peter Shorthouse",
        "alternateName": [
          "David P. Shorthouse",
          "David Shorthouse",
          "David Peter Shorthouse"
        ]
      },
      "created": "2018-10-20T14:30:53+00:00",
      "modified": null
    }
  ],
  "identified": [
    {
      "@type": "Person",
      "@id": "https://bionomia.net/0000-0002-2317-7760",
      "sameAs": "https://orcid.org/0000-0002-2317-7760",
      "givenName": "Charles",
      "familyName": "Haddad",
      "name": "Charles Haddad",
      "alternateName": [

      ],
      "creator": {
        "@type": "Person",
        "@id": "https://bionomia.net/0000-0001-7618-5230",
        "sameAs": "https://orcid.org/0000-0001-7618-5230",
        "givenName": "David Peter",
        "familyName": "Shorthouse",
        "name": "David Peter Shorthouse",
        "alternateName": [
          "David P. Shorthouse",
          "David Shorthouse",
          "David Peter Shorthouse"
        ]
      },
      "created": "2018-10-20T14:30:53+00:00",
      "modified": null
    }
  ],
  "associatedReferences": [
    {
      "@type": "ScholarlyArticle",
      "@id": "https://doi.org/10.1111/jbi.13387",
      "sameAs": "https://doi.org/10.1111/jbi.13387",
      "description": "Piel, W. H. (2018). The global latitudinal diversity gradient pattern in spiders. Journal of Biogeography, 45(8), 1896–1904. doi:10.1111/jbi.13387\n"
    }
  ]
}
```

## Catalogue of Life

Based on TaxonName DRAFT Profile [0.1-DRAFT](https://bioschemas.org/profiles/TaxonName/0.1-DRAFT/) and [0.6-RELEASE](https://bioschemas.org/profiles/Taxon/0.6-RELEASE/).

Embedded in HTML using `<script type="application/ld+json"></script>` tags, e.g. https://www.catalogueoflife.org/data/taxon/5TVFG

- :x: No `@id` for the taxon, so the JSON-LD below is not explicitly connected to https://www.catalogueoflife.org/data/taxon/5TVFG

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

## CiNii

CiNii(Scholarly and Academic Information Navigator, pronounced like "sigh-knee") supports JSON-LD.

### Content negotation

```curl -L -H 'Accept: application/ld+json' https://cir.nii.ac.jp/crid/1390282680241132288```

Returns more extensive JSON-LD that doesn’t use schema.org

```json
{
    "@context": {
        "@vocab": "https://cir.nii.ac.jp/schema/1.0/",
        "rdfs": "http://www.w3.org/2000/01/rdf-schema#",
        "dc": "http://purl.org/dc/elements/1.1/",
        "dcterms": "http://purl.org/dc/terms/",
        "foaf": "http://xmlns.com/foaf/0.1/",
        "prism": "http://prismstandard.org/namespaces/basic/2.0/",
        "cinii": "http://ci.nii.ac.jp/ns/1.0/",
        "datacite": "https://schema.datacite.org/meta/kernel-4/",
        "ndl": "http://ndl.go.jp/dcndl/terms/",
        "jpcoar": "https://github.com/JPCOAR/schema/blob/master/1.0/"
    },
    "@id": "https://cir.nii.ac.jp/crid/1390282680241132288.json",
    "@type": "Article",
    "productIdentifier": [
        {
            "identifier": {
                "@type": "DOI",
                "@value": "10.18984/lepid.35.3_93"
            }
        },
        {
            "identifier": {
                "@type": "NAID",
                "@value": "110007707553"
            }
        },
        {
            "identifier": {
                "@type": "NDL_BIB_ID",
                "@value": "3022597"
            }
        },
        {
            "identifier": {
                "@type": "URI",
                "@value": "http://id.ndl.go.jp/bib/3022597"
            }
        }
    ],
    "dc:title": [
        {
            "@language": "ja",
            "@value": "日本産Stenolechia属キバガの再検討"
        },
        {
            "@language": "en",
            "@value": "A Revision of the Genus Stenolechia MEYRICK from Japan (Lepidoptera, Gelechiidae)"
        },
        {
            "@value": "日本産Stenolechia属キバガの再検討〔英文〕"
        },
        {
            "@language": "ja-Kana",
            "@value": "ニホンサンStenolechiaゾク キバガ ノ サイケントウ エイブン"
        }
    ],
    "dc:language": "en",
    "description": [
        {
            "type": "abstract",
            "notation": [
                {
                    "@language": "en",
                    "@value": "Six Japanese species of the genus Stenolechia excluding issikiella are treated. Three new species, S. robusta, squamifera and rectivalva are described and figured. The male genitalia of S. notomochla are described for the first time. Keys to the species are provided."
                },
                {
                    "@language": "ja",
                    "@value": "Stenolechia属は,旧北区および東洋区から14種知られ,前翅の脈R_4,R_5,M_1の共通柄の存在とM_3とCulbの消失で特徴づけられる.我国から4種が記載されているが,いずれも白っぽい地色の前翅に数個の黒点を持つ小型のキバガで,これら日本産全種に共通する雄交尾器のsaccusとaedeagusの融合は・他の鱗翅類にみられないまれな共有新形質である.ところが,この中でS.issikiellaは,他の3種とは翅脈相と雄交尾器において大きく異なるので,この研究の対象から除外した.また,既知種S.notomochlaの雄交尾器を初めて記載し,以下の3新種を記載した.Stenolechia robusta KANAZAWA ツシマチビキバガ 日本産Stenolechia属の中では前翅が最も灰色がかった種で,大きさと雄交尾器形態はS.notomochlaに似る.notomochlaとは,頭胸部の地色が白色で雄交尾器のanellusに突起を持たないことで区別される.雄交尾器では,強い骨化,腹方に腕曲した長いaedeagus,そして中央が強くくびれたtegumenにより,雌交尾器では,細長くへら状の第8腹節腹板の存在により同定できる.対馬で10月に採集されている. Stenolechia squamifera KANAZAWA ウロコホソハネキバガ 外観はS>rectivalvaに似ており,後翅が台形でなく徐々に細くなること,雄交尾器のvinculumの消失と短いaedeagusという点において共通しているが,雄の触角に密な微感覚毛を持つことで区別される.雄交尾器では,uncus腹面の変形した鱗粉と強く腹方に腕曲したaedeagusのsubzonal sheathにより,雌交尾器では,2つの大きな板状のsignaにより同定できる.九州と対馬に分布する.なお本文中には述べていないが,これらの産地のものとは雄交尾器に小さな違いが認められる個体が,本州と西表島で採集されている. Stenolechia rectivalva KANAZAWA シロホソハネキバガ 雄交尾器では,ほぼまっすぐなcostal armと少し骨化したgnathal lobeにより,雌交尾器では,帯状のsignumにより容易に同定できる.岐阜県上宝村新穂高温泉で6月に採集されている。岡田(1962)のコメツガチビキバガという不明種があるいはこの種かもしれない.参考のために,以下に外部形態に基づく日本産Stenolechia属6種の検索表を示す.1.後翅は先端に向って徐々に細くなり,肛(臀)角が不明瞭である…2-後翅はキバガ科の種で通常見られるように台形に近く,肛角が明瞭である…3 2.頭部の地色は白色がかったオーカー色(黄土色)で,暗色の小斑点を散在し,背面の多くの鱗粉は茶色の横帯を先端近くに持つ;中胸背板は前方に一対の暗色小斑を,後方に1個の大斑を有する;雄触角の鞭節は太く,全体に密な微小で直立した感覚毛を具える…squamifera KANAZAWA-頭部は白色で暗色の小斑点を欠き,背面の鱗粉は純白である;中胸背板は背面中央に1個の暗色大斑を持つのみである;雄触角の鞭節は多少細く,前述のような直立した感覚毛を欠く…recrivalva KANAZAWA 3.小型の種で,前翅長は2.9-3.7mm;雄触角の鞭節は太く,まばらな微小で直立した感覚毛を具える…4-大型の種で,前翅長は4.2-5.9mm;雄触角の鞭節は細く,直立した感覚毛を欠く …5 4.前翅は黄色鱗粉を散布する;頭部背面は白色がかったオーカー色で,明瞭な斑点を欠く…bathrodyas MEYRICK-前翅は黄色鱗粉を欠く;頭部背面の地色は白色がかったオーカー色だが,明瞭な暗色小斑を持つ…Kodamai OKADA 5.頭部は白色で,数個の明瞭な暗色小斑を持つ;前翅の地色は灰色で,長さは4.5-5.9mm…robusta KANAZAWA-頭部はオーカー色で,多くは不明瞭な枯葉色の小斑を持つ;前翅の地色は灰色がかったオーカー色で,長さは4.2-5.0mm…notmochla MEYRICK"
                }
            ]
        }
    ],
    "creator": [
        {
            "@id": "https://cir.nii.ac.jp/crid/1410001205410563840",
            "@type": "Researcher",
            "personIdentifier": [
                {
                    "@type": "NRID",
                    "@value": "1000004760041"
                }
            ],
            "foaf:name": [
                {
                    "@language": "ja",
                    "@value": "金沢 至"
                },
                {
                    "@language": "en",
                    "@value": "KANAZAWA Itaru"
                }
            ],
            "jpcoar:affiliationName": [
                {
                    "@language": "en",
                    "@value": "Entomological Laboratory, Faculty of Agriculture, Kyushu University"
                }
            ]
        }
    ],
    "publication": {
        "publicationIdentifier": [
            {
                "@type": "PISSN",
                "@value": "0024-0974"
            },
            {
                "@type": "EISSN",
                "@value": "1880-8077"
            },
            {
                "@type": "NDL_BIB_ID",
                "@value": "000000015264"
            },
            {
                "@type": "NCID",
                "@value": "AN0040888X"
            }
        ],
        "prism:publicationName": [
            {
                "@language": "ja",
                "@value": "蝶と蛾"
            },
            {
                "@language": "en",
                "@value": "Lepidoptera Science"
            },
            {
                "@language": "en",
                "@value": "Cho to Ga"
            },
            {
                "@language": "en",
                "@value": "Trans. lepid. Soc. Japan"
            },
            {
                "@language": "en",
                "@value": "Tyo to Ga"
            },
            {
                "@language": "ja",
                "@value": "蝶と蛾"
            },
            {
                "@language": "en",
                "@value": "Transaction of the Lepidopterological Society of Japan"
            }
        ],
        "dc:publisher": [
            {
                "@language": "en",
                "@value": "THE LEPIDOPTEROLOGICAL SOCIETY OF JAPAN"
            },
            {
                "@language": "ja",
                "@value": "日本鱗翅学会"
            }
        ],
        "prism:publicationDate": "1984",
        "prism:volume": "35",
        "prism:number": "3",
        "prism:startingPage": "93",
        "prism:endingPage": "120"
    },
    "url": [
        {
            "@id": "http://id.ndl.go.jp/bib/3022597"
        }
    ],
    "dataSourceIdentifier": [
        {
            "@type": "JALC",
            "@value": "oai:japanlinkcenter.org:2003075338"
        },
        {
            "@type": "CIA",
            "@value": "110007707553"
        },
        {
            "@type": "NDL",
            "@value": "oai:iss.ndl.go.jp:R000000004-I3022597-00"
        }
    ]
}

```



### Embedded

CiNii web pages have JSON-LD for articles embedded in the HTML, e.g. https://cir.nii.ac.jp/crid/1390282680241132288

- :warning: Note the lack of `@id`.

- :warning: Note the identifier is a made up type `DOI`.

- :warning: `publication` is used to store the name of the journal, whereas schema.org expects this to be an instance of `PublicationEvent`.


```json
{
  "@context": "http://schema.org",
  "@graph": [{
    "@type": "ScholarlyArticle",
    "name": "A Revision of the Genus Stenolechia MEYRICK from Japan (Lepidoptera, Gelechiidae)",
    "description": "Six Japanese species of the genus Stenolechia excluding issikiella are treated. Three new species, S. robusta, squamifera and rectivalva are described and figured. The male genitalia of S. notomochla are described for the first time. Keys to the species are provided.",
    "author": "KANAZAWA Itaru",
    "publisher": {
      "@type": "Organization",
      "name": "THE LEPIDOPTEROLOGICAL SOCIETY OF JAPAN"
    },
    "publication": "Lepidoptera Science",
    "datePublished": "1984",
    "pageStart": "93",
    "pageEnd": "120",
    "identifier": {
      "@type": "DOI",
      "text": "10.18984/lepid.35.3_93"
    },
    "keywords": "",
    "inLanguage": "en",
    "url": "https://cir.nii.ac.jp/crid/1390282680241132288"
  }]
}
```

## Encyclopedia of Life (EOL)

An earlier version of EOL supported JSON-LD via their API (trait bank). They had JSON-LD for taxa, and for “collections” (user-created lists of species).

- :x: This JSON-LD is not valid, see https://github.com/EOL/deprecated_eol/issues/139

[116394-unsorted.json](116394-unsorted.json)

```json
{
  "name": "Birds, Sangster and Luksenburg",
  "description": "Bird species described over period 1935-2009. This list comes from the dataset http://dx.doi.org/10.5061/dryad.m4g2n, associated with paper http://dx.doi.org/10.1093/sysbio/syu069",
  "logo_url": "http://160.111.248.28/content/2015/04/25/21/54822_130_130.jpg",
  "created": "2015-04-21T21:14:05Z",
  "modified": "2015-04-26T01:36:19Z",
  "total_items": 386,
  "item_types": [{
    "item_type": "TaxonConcept",
    "item_count": 386
  }, {
    "item_type": "Text",
    "item_count": 0
  }, {
    "item_type": "Video",
    "item_count": 0
  }, {
    "item_type": "Image",
    "item_count": 0
  }, {
    "item_type": "Sound",
    "item_count": 0
  }, {
    "item_type": "Community",
    "item_count": 0
  }, {
    "item_type": "User",
    "item_count": 0
  }, {
    "item_type": "Collection",
    "item_count": 0
  }],
  "collection_items": [{
        "name": "Synallaxis beverlyae",
        "object_type": "TaxonConcept",
        "object_id": 10692652,
        "title": null,
        "created": "2015-04-22T17:22:06Z",
        "updated": "2015-04-22T17:22:06Z",
        "annotation": null,
        "sort_field": null,
        "references": [],
        "richness_score": 31.0803
      }, {
        "name": "Scepomycter rubehoensis Bowie, Fjeldsa & Kiure, 2009",
        "object_type": "TaxonConcept",
        "object_id": 10692649,
        "title": null,
        "created": "2015-04-22T17:21:52Z",
        "updated": "2015-04-22T17:21:52Z",
        "annotation": null,
        "sort_field": null,
        "references": [],
        "richness_score": 13.6252
      }
…
]
}
```

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
…
    ]
  }
}
```

## Google Knowledge Graph query

Search result from Google’s API `https://kgsearch.googleapis.com/v1/entities:search?query=Gerald%20R.%20Allen&key=<apikey>&indent=true&limit=10`, results presented as a `schema:ItemList` with each hit as an element of `itemListElement`.

```json
{
  "@context": {
    "goog": "http://schema.googleapis.com/",
    "resultScore": "goog:resultScore",
    "detailedDescription": "goog:detailedDescription",
    "@vocab": "http://schema.org/",
    "kg": "http://g.co/kg",
    "EntitySearchResult": "goog:EntitySearchResult"
  },
  "@type": "ItemList",
  "itemListElement": [
    {
      "result": {
        "@id": "kg:/m/05vfnbs",
        "@type": [
          "Thing",
          "Person"
        ],
        "name": "Gerald R. Allen",
        "detailedDescription": {
          "url": "https://en.wikipedia.org/wiki/Gerald_R._Allen",
          "license": "https://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License",
          "articleBody": "Gerald Robert \"Gerry\" Allen is an American-born Australian ichthyologist. His career began in 1963, when he spent a semester at the University of Hawaii, where he also received a PhD in marine zoology in 1971. "
        },
        "description": "Australian ichthyologist"
      },
      "@type": "EntitySearchResult",
      "resultScore": 74.39900970458984
    }
  ]
}
```

## HUSCAP

The Hokkaido University Collection of Scholarly and Academic Papers (HUSCAP) has JSON-LP embeded in repository items. For example, https://eprints.lib.hokudai.ac.jp/dspace/handle/2115/9222 [hdl:2115/9222](https://hdl.handle.net/2115/9222) looks like this: 

- :x: Note nested `isPartOf` to represent relationship between article, issue, volume, and journal. 

```json
{
  "@context": "http://schema.org",
  "@type": "ScholarlyArticle",
  "image": "https://eprints.lib.hokudai.ac.jp/image/noimage.png",
  "author": {
    "@type": "Person",
    "name": ["Shiraki, Tokuichi"]
  },
  "headline": "Orthoptera of the Japanese Empire 2 (Blattidae)",
  "name": "Orthoptera of the Japanese Empire 2 (Blattidae)",
  "datePublished": "1931-07",
  "publisher": {
    "@type": "Organization",
    "name": "松村　松年",
    "logo": {
      "@type": "ImageObject",
      "url": "https://eprints.lib.hokudai.ac.jp/image/noimage.png"
    }
  },
  "isPartof": {
    "@type": "PublicationIssue",
    "issueNumber": "4",
    "datePublished": "1931-07",
    "isPartOf": {
      "@type": "PublicationVolume",
      "volumeNumber": "5",
      "isPartOf": {
        "@type": "Periodical",
        "name": "Insecta matsumurana",
        "issn": "0020-1804",
        "publisher": "松村　松年"
      }
    }
  },
  "pageStart": "171",
  "pageEnd": "209",
  "identifier": "http://hdl.handle.net/2115/9222"
}
```


## Hollow Lands book

Embedded markup for a book from [Mistress of Animals](https://hollowlands.com/books/the-chained-adept/mistress-of-animals/), see [Using Schema.org for books – an example](https://hollowlands.com/2018/02/using-schema-org-for-books-an-example/) for description of approach. 

- :x: Web page has two sets of embedded JSON-LD, one to describe the web page and associated images, one to describe the book. 

- :x: Note use of `https://www.worldcat.org/oclc/957077876` as `@id`, and `workExample` to link to different ISBNs.

```json
{
  "@context": "http://schema.org",
  "@type": "Book",
  "@id": "https://www.worldcat.org/oclc/957077876",
  "name": "Mistress of Animals",
  "author": {
    "@type": "Person",
    "name": "Karen Myers",
    "sameas": "http://isni.org/isni/0000000036263292"
  },
  "publisher": {
     "@type": "Organization",
     "name": "Perkunas Press"
  },
  "url": "https://hollowlands.com/books/the-chained-adept/mistress-of-animals/",
  "image": "https://hollowlands.com/wp-content/uploads/2018/10/Mistress-of-Animals-Full-Front-Cover-297x459.jpg",
  "description": "Book 2 of The Chained Adept, a heroic fantasy series",
  "workExample": [{
    "@type": "Book",
    "isbn": "9781629620329",
    "numberofpages": "344",
    "bookFormat": "http://schema.org/Paperback",
    "exampleofwork": "http://worldcat.org/isbn/9781629620299"
    },{
    "@type": "Book",
    "isbn": "9781629620336",
    "numberofpages": "344",
    "bookFormat": "http://schema.org/EBook",
    "exampleofwork": "http://worldcat.org/isbn/9781629620336"
    }]
}
```


## ISSN

The [ISSN Portal supports linked data](https://portal.issn.org), for example `https://portal.issn.org/resource/ISSN/2589-3831?format=json` returns JSON-LD.

- :warning: The JSON-LD is broken as there is no URI for the actual ISSN. The RDF/XML and Turtle formats declare `@base <http://issn.org/>` so the URI becomes, for example, `http://issn.org/resource/ISSN/2589-3831`.

```json
{
  "@graph" : [ {
    "@id" : "http://id.loc.gov/vocabulary/countries/ne",
    "label" : "Netherlands"
  }, {
    "@id" : "organization/ISSNCenter#_j",
    "@type" : "http://schema.org/Organization"
  }, {
    "@id" : "resource/ISSN-L/2589-3823",
    "identifiedBy" : "resource/ISSN/2589-3831#ISSN-L"
  }, {
    "@id" : "resource/ISSN/2589-3831",
    "@type" : [ "http://id.loc.gov/ontologies/bibframe/Work", "http://id.loc.gov/ontologies/bibframe/Instance", "http://schema.org/Periodical" ],
    "identifiedBy" : [ "resource/ISSN/2589-3831#ISSN-L", "resource/ISSN/2589-3831#KeyTitle", "resource/ISSN/2589-3831#ISSN" ],
    "mainTitle" : "Fungal systematics and evolution.",
    "otherPhysicalFormat" : "resource/ISSN/2589-3823",
    "title" : "resource/ISSN/2589-3831#KeyTitle",
    "format" : "vocabularies/medium#Online",
    "identifier" : "2589-3831",
    "isFormatOf" : "resource/ISSN/2589-3823",
    "type" : "http://marc21rdf.info/terms/formofmaterial#a",
    "issn" : "2589-3831",
    "isPartOf" : "resource/ISSN-L/2589-3823",
    "http://schema.org/issn" : "2589-3831",
    "name" : [ "Fungal systematics and evolution.", "Fungal systematics and evolution (Online)" ],
    "publication" : "resource/ISSN/2589-3831#ReferencePublicationEvent",
    "url" : "http://www.fuse-journal.org/index.php/code-of-ethics"
  }, {
    "@id" : "resource/ISSN/2589-3831#ISSN",
    "@type" : "http://id.loc.gov/ontologies/bibframe/Issn",
    "status" : "vocabularies/IdentifierStatus#Valid",
    "value" : "2589-3831"
  }, {
    "@id" : "resource/ISSN/2589-3831#ISSN-L",
    "@type" : "http://id.loc.gov/ontologies/bibframe/IssnL",
    "status" : "vocabularies/IdentifierStatus#Valid",
    "value" : "2589-3823"
  }, {
    "@id" : "resource/ISSN/2589-3831#KeyTitle",
    "@type" : [ "http://id.loc.gov/ontologies/bibframe/Identifier", "http://id.loc.gov/ontologies/bibframe/KeyTitle" ],
    "value" : "Fungal systematics and evolution (Online)"
  }, {
    "@id" : "resource/ISSN/2589-3831#Record",
    "@type" : "http://schema.org/CreativeWork",
    "status" : "vocabularies/RecordStatus#Register",
    "modified" : "20210206220800.0",
    "mainEntity" : "resource/ISSN/2589-3831",
    "wasAttributedTo" : "organization/ISSNCenter#_j"
  }, {
    "@id" : "resource/ISSN/2589-3831#ReferencePublicationEvent",
    "@type" : "http://schema.org/PublicationEvent",
    "location" : "http://id.loc.gov/vocabulary/countries/ne"
  } ],
  "@context" : {
    "status" : {
      "@id" : "http://id.loc.gov/ontologies/bibframe/status",
      "@type" : "@id"
    },
    "value" : {
      "@id" : "http://www.w3.org/1999/02/22-rdf-syntax-ns#value"
    },
    "name" : {
      "@id" : "http://schema.org/name"
    },
    "title" : {
      "@id" : "http://id.loc.gov/ontologies/bibframe/title",
      "@type" : "@id"
    },
    "identifiedBy" : {
      "@id" : "http://id.loc.gov/ontologies/bibframe/identifiedBy",
      "@type" : "@id"
    },
    "otherPhysicalFormat" : {
      "@id" : "http://id.loc.gov/ontologies/bibframe/otherPhysicalFormat",
      "@type" : "@id"
    },
    "identifier" : {
      "@id" : "http://purl.org/dc/elements/1.1/identifier"
    },
    "issn" : {
      "@id" : "http://purl.org/ontology/bibo/issn"
    },
    "url" : {
      "@id" : "http://schema.org/url"
    },
    "publication" : {
      "@id" : "http://schema.org/publication",
      "@type" : "@id"
    },
    "isFormatOf" : {
      "@id" : "http://purl.org/dc/terms/isFormatOf",
      "@type" : "@id"
    },
    "isPartOf" : {
      "@id" : "http://schema.org/isPartOf",
      "@type" : "@id"
    },
    "format" : {
      "@id" : "http://purl.org/dc/elements/1.1/format",
      "@type" : "@id"
    },
    "mainTitle" : {
      "@id" : "http://id.loc.gov/ontologies/bibframe/mainTitle"
    },
    "type" : {
      "@id" : "http://purl.org/dc/terms/type",
      "@type" : "@id"
    },
    "label" : {
      "@id" : "http://www.w3.org/2000/01/rdf-schema#label"
    },
    "wasAttributedTo" : {
      "@id" : "http://www.w3.org/ns/prov#wasAttributedTo",
      "@type" : "@id"
    },
    "mainEntity" : {
      "@id" : "http://schema.org/mainEntity",
      "@type" : "@id"
    },
    "modified" : {
      "@id" : "http://purl.org/dc/terms/modified",
      "@type" : "http://www.w3.org/2001/XMLSchema#dateTime"
    },
    "location" : {
      "@id" : "http://schema.org/location",
      "@type" : "@id"
    }
  }
}
```

## NC State University Libraries

JSON-LD is embedded in the `<body>` of the web page using `<script type=“application/ld+json”>`, and also there is a link in the IIIF manifest. For example, for [A Taxonomic Study of the Leafhopper Genus Empoasca (Homoptera: Cicadellidae) in Eastern Peru, (Technical Bulletin 272), Jul. 1982](https://d.lib.ncsu.edu/collections/catalog/ua101_001_301483_20220606_35533) the IIIF manifest for the viewer is https://d.lib.ncsu.edu/collections/catalog/ua101_001_301497_20220613_35703/manifest. At the end of the manifest is:

```
    "seeAlso": [
        {
            "@id": "https://d.lib.ncsu.edu/collections/catalog/oai?identifier=ncsul%2Fua101_001_301497_20220613_35703&metadataPrefix=oai_dc&verb=GetRecord",
            "format": "text/xml",
            "label": "Dublin Core XML via OAI-PMH"
        },
        {
            "@id": "https://d.lib.ncsu.edu/collections/catalog/ua101_001_301497_20220613_35703/schemaorg.json",
            "format": "application/ld+json",
            "profile": "https://schema.org",
            "label": "Schema.org metadata as JSON-LD"
        }
    ]
```

The URL https://d.lib.ncsu.edu/collections/catalog/ua101_001_301483_20220606_35533/schemaorg.json resolves to the JSON-LD below. It is “typical” library metadata, that is, lacks the author so the creator is the institution, the keywords are generic, there is no volume or pagination, etc.

```json
{
    "@context": "http://schema.org",
    "@type": "CreativeWork",
    "@id": "https://d.lib.ncsu.edu/collections/catalog/ua101_001_301483_20220606_35533",
    "url": "https://d.lib.ncsu.edu/collections/catalog/ua101_001_301483_20220606_35533",
    "name": "A Taxonomic Study of the Leafhopper Genus Empoasca (Homoptera: Cicadellidae) in Eastern Peru, (Technical Bulletin 272), Jul. 1982",
    "thumbnailUrl": "https://iiif.lib.ncsu.edu/iiif/ua101_001_301483_20220606_35533_0001/full/350,/0/default.jpg",
    "image": "https://iiif.lib.ncsu.edu/iiif/ua101_001_301483_20220606_35533_0001/full/350,/0/default.jpg",
    "creator": [
        {
            "name": "North Carolina Cooperative Extension Service",
            "description": "North Carolina Agricultural Extension Service is a cooperative service between North Carolina State University, North Carolina Agricultural and Technical University, and the U.S. Dept. of Agriculture; located on campus of N.C. State University.",
            "@type": "Organization",
            "sameAs": "http://id.loc.gov/authorities/names/no92011129"
        }
    ],
    "dateCreated": "1982-06",
    "about": [
        {
            "@type": "Thing",
            "name": "Agriculture"
        },
        {
            "@type": "Thing",
            "name": "Community and Extension"
        },
        {
            "@type": "Thing",
            "name": "Insects",
            "sameAs": "http://id.loc.gov/authorities/subjects/sh85066670"
        }
    ],
    "keywords": [
        "Agriculture",
        "Community and Extension"
    ],
    "genre": [
        "Agricultural literature"
    ],
    "isPartOf": [
        "https://d.lib.ncsu.edu/collections/catalog?f%5Bispartof_facet%5D%5B%5D=Project+CERES",
        "https://d.lib.ncsu.edu/collections/catalog?f%5Bispartof_facet%5D%5B%5D=NC+Agricultural+Research+Service+Technical+Bulletin"
    ],
    "contentLocation": [
        {
            "@type": "Place",
            "name": "North Carolina",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "35.50069",
                "longitude": "-80.00032"
            }
        }
    ]
}
```


## ORCID

ORCID supports JSON-LD via content negotiation, e.g.

```curl -L -H 'Accept: application/ld+json' https://orcid.org/0000-0002-2168-0514```

- :warning: Note the use of `@reverse` to associate person with publications. There is no notion of order of authorship, and any other authors are not listed (even if they have ORCID’s).

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

## Oxford University Press (OUP)

OUP embeds JSON-LD in their web pages, e.g. https://academic.oup.com/botlinnean/article/183/3/373/3092408

- :warning: Note the horrible image URLs that include timestamps and other ephemeral parameters.
- :warning: Note the nested `schema:isPartOf` relationships to model a `ScholarlyArticle` within a `PublicationIssue` within a `Periodical`.

[oup.json](oup.json)

```json
{
  "@context": "https://schema.org",
  "@type": "ScholarlyArticle",
  "@id": "https://academic.oup.com/botlinnean/article/183/3/373/3092408",
  "name": "Systematics of Libinhania, a new endemic genus of Gnaphalieae (Asteraceae) from the Socotra archipelago (Yemen), inferred from plastid, low-copy nuclear and nuclear ribosomal DNA loci",
  "datePublished": "2017-03-29",
  "isPartOf": {
    "@id": "https://academic.oup.com/botlinnean/botlinnean/issue/183/3",
    "@type": "PublicationIssue",
    "issueNumber": "3",
    "datePublished": "2017-03-01",
    "isPartOf": {
      "@id": "https://academic.oup.com/botlinnean/botlinnean",
      "@type": "Periodical",
      "name": "Botanical Journal of the Linnean Society",
      "issn": ["1095-8339"]
    }
  },
  "url": "https://dx.doi.org/10.1093/botlinnean/bow013",
  "keywords": ["allopolyploidy", "ancestral state reconstruction", "Compositae", "Helichrysum", "morphology", "phylogenetics", "reticulate evolution", "taxonomy"],
  "inLanguage": "en",
  "copyrightHolder": "The Linnean Society of London",
  "copyrightYear": "2021",
  "publisher": "Oxford University Press",
  "sameAs": "https://academic.oup.com/botlinnean/article/183/3/373/3092408",
  "author": [{
    "name": "Kilian, Norbert",
    "affiliation": "1  Botanic Garden and Botanical Museum Berlin, Freie Universität Berlin ,  Königin-Luise-Str. 6–8, 14195 Berlin ,  Germany",
    "@type": "Person"
  }, {
    "name": "Galbany-Casals, Mercè",
    "affiliation": "2  Departament de Biologia Animal, Biologia Vegetal i Ecologia, Facultat de Biociències, Universitat Autònoma de Barcelona ,  08193 Bellaterra ,  Spain",
    "@type": "Person"
  }, {
    "name": "Sommerer, Ronny",
    "affiliation": "1  Botanic Garden and Botanical Museum Berlin, Freie Universität Berlin ,  Königin-Luise-Str. 6–8, 14195 Berlin ,  Germany",
    "@type": "Person"
  }, {
    "name": "Oberprieler, Christoph",
    "affiliation": "3  Evolutionary and Systematic Botany, Institute of Plant Sciences, University of Regensburg, Universitätsstr .  31, 93053 Regensburg ,  Germany",
    "@type": "Person"
  }, {
    "name": "Smissen, Rob",
    "affiliation": "4  Allan Herbarium, Landcare Research ,  P.O. Box 69040, Lincoln 7640 ,  New Zealand",
    "@type": "Person"
  }, {
    "name": "Miller, Antony",
    "affiliation": "5  Centre for Middle Eastern Plants, Royal Botanic Garden Edinburgh ,  20A Inverleith Row, Edinburgh EH3 5LR ,  UK",
    "@type": "Person"
  }, {
    "name": "Rabe, Katharina",
    "affiliation": "1  Botanic Garden and Botanical Museum Berlin, Freie Universität Berlin ,  Königin-Luise-Str. 6–8, 14195 Berlin ,  Germany",
    "@type": "Person"
  }],
  "description": "Abstract. The Socotra archipelago off the Horn of Africa shelters morphologically diverse endemic species of Asteraceae tribe Gnaphalieae, eight species placed ",
  "pageStart": "373",
  "pageEnd": "412",
  "thumbnailURL": "https://oup.silverchair-cdn.com/oup/backfile/Content_public/Journal/botlinnean/Issue/183/3/2/m_cover.jpeg?Expires=1693078539&Signature=yTEaF50jlovutk2hTbTPGXMMOXwNdLPjSu4~cVx4jgX1HJKM2mJbFnInOILp08pNsbCtM9d-dJliWX4oP94FcFYIOauK7Aa5soOcgU5eihKPFTvSIgGGYyIiz-IWPlvWyF6ZOQv4T884bGPujueT2pybcXHqBiEqLVFpF3SYbJxDbGnPyxGFsk23vhfmbdxup4Y5AV~meKeumSYFzNetiZeOXp1xLSYzFb3SeUWNlr~jpzl32xheIekDxtTueD1dBKdd2Lh69p8UUD2rm-g6UGaprmZsXuimn30ZFDXS5Duf6QoXUFfb0PLPEn5D4502L-7to5FOzsy4w7SUdIkr3Q__&Key-Pair-Id=APKAIE5G5CRDK6RD3PGA",
  "headline": "Systematics of Libinhania, a new endemic genus of Gnaphalieae (Asteraceae) from the Socotra archipelago (Yemen), inferred from plastid, low-copy nuclear and nuclear ribosomal DNA loci",
  "image": "https://oup.silverchair-cdn.com/oup/backfile/Content_public/Journal/botlinnean/Issue/183/3/2/m_cover.jpeg?Expires=1693078539&Signature=yTEaF50jlovutk2hTbTPGXMMOXwNdLPjSu4~cVx4jgX1HJKM2mJbFnInOILp08pNsbCtM9d-dJliWX4oP94FcFYIOauK7Aa5soOcgU5eihKPFTvSIgGGYyIiz-IWPlvWyF6ZOQv4T884bGPujueT2pybcXHqBiEqLVFpF3SYbJxDbGnPyxGFsk23vhfmbdxup4Y5AV~meKeumSYFzNetiZeOXp1xLSYzFb3SeUWNlr~jpzl32xheIekDxtTueD1dBKdd2Lh69p8UUD2rm-g6UGaprmZsXuimn30ZFDXS5Duf6QoXUFfb0PLPEn5D4502L-7to5FOzsy4w7SUdIkr3Q__&Key-Pair-Id=APKAIE5G5CRDK6RD3PGA"
}
```

## ResearchGate

At one point ResearchGate embedded [schema.org](http://schema.org) in their web pages, but they seemed to have stopped doing this(?).

- :warning: Note the lack of `@id`, and using `schema:mainEntityOfPage` (with a relative URL) to link person and web page.

[researchgate.json](researchgate.json)

```json
{
  "@context": "http://schema.org/",
  "@type": "Person",
  "mainEntityOfPage": "scientific-contributions/2054435998_Mark_Hughes",
  "name": "Mark Hughes",
  "image": "https://c5.rgstatic.net/m/420791293341780/images/template/default/author/author_default_l.jpg",
  "url": "https://www.researchgate.net/scientific-contributions/2054435998_Mark_Hughes",
  "affiliation": {
    "@type": "Organization",
    "name": "Royal Botanic Garden Edinburgh",
    "url": "https://www.researchgate.net/institution/Royal_Botanic_Garden_Edinburgh"
  }
}
```

[researchgate-one-paper](researchgate-one-paper.json)

```json
{
    "@context": "https://schema.org/",
    "@type": "ScholarlyArticle",
    "datePublished": "2019-07-01",
    "headline": "Zingiber perenense, a new species in Zingiber section Cryptanthium (Zingiberaceae) from Nagaland, India",
    "mainEntityOfPage": "https://www.researchgate.net/publication/334171947_Zingiber_perenense_a_new_species_in_Zingiber_section_Cryptanthium_Zingiberaceae_from_Nagaland_India",
    "author": [{
      "@context": "https://schema.org/",
      "@type": "Person",
      "name": "Nripemo Odyuo",
      "url": "https://www.researchgate.net/profile/Nripemo_Odyuo",
      "image": "https://i1.rgstatic.net/ii/profile.image/657589205495810-1533792892690_Q64/Nripemo_Odyuo.jpg",
      "memberOf": {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "name": "Botanical Survey fo India"
      }
    }, {
      "@context": "https://schema.org/",
      "@type": "Person",
      "name": "Dilip Kr. Roy",
      "url": "https://www.researchgate.net/profile/Dilip_Kr_Roy",
      "image": "https://i1.rgstatic.net/ii/profile.image/303916372168705-1449470717804_Q64/Dilip_Kr_Roy.jpg",
      "memberOf": {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "name": "Botanical Survey of India, Shillong"
      }
    }, {
      "@context": "https://schema.org/",
      "@type": "Person",
      "name": "Chalbasson Lyngwa",
      "url": "https://www.researchgate.net/scientific-contributions/2159356546_Chalbasson_Lyngwa",
      "image": "https://c5.rgstatic.net/m/435982309481010/images/template/default/author/author_default_m.jpg"
    }, {
      "@context": "https://schema.org/",
      "@type": "Person",
      "name": "A. A. Mao",
      "url": "https://www.researchgate.net/profile/A_Mao",
      "image": "https://i1.rgstatic.net/ii/profile.image/526099911909377-1502443401216_Q64/A_Mao.jpg",
      "memberOf": {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "name": "Botanical Survey of India, Shillong"
      }
    }]
}
```



## SciGraph

SciGraph uses JSON-LD as the canonical representation of their data. It can be retrieved by content-negotiation.

```curl -L http://scigraph.springernature.com/pub.10.1007/s00606-016-1316-4.json```


- :warning: Unlike, say, OUP, SciGraph doesn’t nest `schema:isPartOf` relations when linking an article to the issue, volume, and periodical.
- :warning: The SciGraph JSON-LD treats authors as an ordered list, which you can see from their context:

```json
        "author": {
            "@id": "schema:author",
            "@container": "@list"
        },
```

RDF has no built-in notion of order, so this is achieved using `rdfs:lists`. See http://www.snee.com/bobdc.blog/2014/04/rdf-lists-and-sparql.html and https://stackoverflow.com/questions/17523804/is-it-possible-to-get-the-position-of-an-element-in-an-rdf-collection-in-sparql/17530689#17530689 for more discussion. If you look at the ntriples version of the SciGraph RDF (e.g., [s00606-016-1316-4.nt](s00606-016-1316-4.nt)) you will see that the value for `schema:author` is a blank node (bnode), and that this bnode has two predicates, `rdf:first` and `rdf:rest`. One points to an author, the other points to another bnode. This pattern repeats until we encounter a value of `rdf:nil` for `rdf:rest`.

![alt text](list.png)

So to store an ordered list of authors we create a [singly-linked list](https://en.wikipedia.org/wiki/Linked_list#Singly_linked_list) in RDF.

[s00606-016-1316-4.json](s00606-016-1316-4.json)

```json
{
    "about": [
        {
            "id": "http://purl.org/au-research/vocabulary/anzsrc-for/2008/0604", 
            "inDefinedTermSet": "http://purl.org/au-research/vocabulary/anzsrc-for/2008/", 
            "name": "Genetics", 
            "type": "DefinedTerm"
        }, 
        {
            "id": "http://purl.org/au-research/vocabulary/anzsrc-for/2008/06", 
            "inDefinedTermSet": "http://purl.org/au-research/vocabulary/anzsrc-for/2008/", 
            "name": "Biological Sciences", 
            "type": "DefinedTerm"
        }
    ], 
    "author": [
        {
            "affiliation": {
                "name": [
                    "Instituto de Bot\u00e1nica Darwinion-CONICET, Labard\u00e9n 200, CC 22, B1642HYD, San Isidro, Buenos Aires, Argentina"
                ], 
                "type": "Organization"
            }, 
            "familyName": "Urtubey", 
            "givenName": "Estrella", 
            "id": "sg:person.013337044763.79", 
            "sameAs": [
                "https://app.dimensions.ai/discover/publication?and_facet_researcher=ur.013337044763.79"
            ], 
            "type": "Person"
        }, 
        {
            "affiliation": {
                "name": [
                    "Instituto de Bot\u00e1nica Darwinion-CONICET, Labard\u00e9n 200, CC 22, B1642HYD, San Isidro, Buenos Aires, Argentina"
                ], 
                "type": "Organization"
            }, 
            "familyName": "L\u00f3pez", 
            "givenName": "Alicia", 
            "id": "sg:person.013135326054.83", 
            "sameAs": [
                "https://app.dimensions.ai/discover/publication?and_facet_researcher=ur.013135326054.83"
            ], 
            "type": "Person"
        }
…
    ], 
    "citation": [
        {
            "id": "https://doi.org/10.1080/0028825x.1971.10430174", 
            "sameAs": [
                "https://app.dimensions.ai/details/publication/pub.1000414033"
            ], 
            "type": "CreativeWork"
        }, 
        {
            "id": "https://doi.org/10.1006/mpev.1998.0545", 
            "sameAs": [
                "https://app.dimensions.ai/details/publication/pub.1003208658"
            ], 
            "type": "CreativeWork"
        },
…
    ], 
    "datePublished": "2016-10", 
    "datePublishedReg": "2016-10-01", 
    "description": "Gamochaeta (tribe Gnaphalieae, Asteraceae) is composed of ca. 60 species primarily distributed in tropical and subtropical America. Within the tribe Gnaphalieae, the genus is characterized by capitula arranged in spikes or head-like clusters, few hermaphroditic central florets, truncate style branches with apical sweeping trichomes, pappus bristles connate at the base into a ring falling as a unit, and achenes with globose twin trichomes. Previous molecular phylogenetic studies have suggested the paraphyly of the genus, but have not provided a basis for redefining generic limits due to incomplete taxon sampling. To address this problem, DNA sequences from the plastid (trnL-F) and nuclear (ETS and ITS) genomes were analyzed from a broad taxon sample representing the full range of morphological variation known in the genus. Our results affirm that Gamochaeta is paraphyletic as presently circumscribed. Two clades can be recognized: one clade that includes the majority of the species currently assigned to Gamochaeta and a second clade that includes Gamochaetopsis, Stuckertiella and seven species of Gamochaeta. We present here a new circumscription of Gamochaeta, including two new combinations, Gamochaeta alpina and Gamochaeta peregrina, and the resurrection of Gamochaeta capitata. Our results also show Omalotheca supina, O. norvegica and O. sylvatica, which were placed by some authors in Gamochaeta or in Gnaphalium, form a monophyletic group distantly related to both genera.", 
    "genre": "research_article", 
    "id": "sg:pub.10.1007/s00606-016-1316-4", 
    "inLanguage": [
        "en"
    ], 
    "isAccessibleForFree": false, 
    "isPartOf": [
        {
            "id": "sg:journal.1022987", 
            "issn": [
                "0378-2697", 
                "1615-6110"
            ], 
            "name": "Plant Systematics and Evolution", 
            "type": "Periodical"
        }, 
        {
            "issueNumber": "8", 
            "type": "PublicationIssue"
        }, 
        {
            "type": "PublicationVolume", 
            "volumeNumber": "302"
        }
    ], 
    "name": "New circumscription of the genus Gamochaeta (Asteraceae, Gnaphalieae) inferred from nuclear and plastid DNA sequences", 
    "pagination": "1047-1066", 
    "productId": [
        {
            "name": "readcube_id", 
            "type": "PropertyValue", 
            "value": [
                "1bdedc001df21e60afc6b69f89aecf8ac60c883f090314c80ea478255e8ce695"
            ]
        }, 
        {
            "name": "doi", 
            "type": "PropertyValue", 
            "value": [
                "10.1007/s00606-016-1316-4"
            ]
        }, 
        {
            "name": "dimensions_id", 
            "type": "PropertyValue", 
            "value": [
                "pub.1005850085"
            ]
        }
    ], 
    "sameAs": [
        "https://doi.org/10.1007/s00606-016-1316-4", 
        "https://app.dimensions.ai/details/publication/pub.1005850085"
    ], 
    "sdDataset": "articles", 
    "sdDatePublished": "2019-04-11T12:21", 
    "sdLicense": "https://scigraph.springernature.com/explorer/license/", 
    "sdPublisher": {
        "name": "Springer Nature - SN SciGraph project", 
        "type": "Organization"
    }, 
    "sdSource": "s3://com-uberresearch-data-dimensions-target-20181106-alternative/cleanup/v134/2549eaecd7973599484d7c17b260dba0a4ecb94b/merge/v9/a6c9fde33151104705d4d7ff012ea9563521a3ce/jats-lookup/v90/0000000362_0000000362/records_87079_00000000.jsonl", 
    "type": "ScholarlyArticle", 
    "url": "https://link.springer.com/10.1007%2Fs00606-016-1316-4"
}
```

## Taylor and Francis

Taylor and Francis embeds JSON-LD in their web pages, e.g. https://www.tandfonline.com/doi/abs/10.1080/12265071.1998.9647387 but this only describes the `BreadcrumbList` for the web page, not the article.

- :warning: Describes web page breadcrumbs, not the article.


[tandf.json](tandf.json)


```json
[

    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement":
    [{
    "@type": "ListItem",
    "position": "1",
    "name": "Home"
    ,"item": "https://www.tandfonline.com/"
    },{
    "@type": "ListItem",
    "position": "2",
    "name": "All Journals"
    ,"item": "https://www.tandfonline.com/action/showPublications?pubType=journal"
    },{
    "@type": "ListItem",
    "position": "3",
    "name": "Korean Journal of Biological Sciences"
    ,"item": "https://www.tandfonline.com/tacs18"
    },{
    "@type": "ListItem",
    "position": "4",
    "name": "List of Issues"
    ,"item": "https://www.tandfonline.com/loi/tacs18"
    },{
    "@type": "ListItem",
    "position": "5",
    "name": "Volume 2, Issue 1"
    ,"item": "https://www.tandfonline.com/toc/tacs18/2/1"
    },{
    "@type": "ListItem",
    "position": "6",
    "name": "Acheilognathus majusculus, a new bitterl .... "
    
    }]
    }

]
```


## WorldCat

WorldCat uses content-negotiation, see [Content-Negotiation for WorldCat](https://www.dataliberate.com/2013/06/03/content-negotiation-for-worldcat/) as well as extensions, e.g. https://www.worldcat.org/oclc/957077876.jsonld.

The example below is the WorldCat record for the Hollow Lands book example discussed above.

```json
{
    "@graph": [
        {
            "@id": "http://dewey.info/class/813.6/e23/",
            "@type": "schema:Intangible"
        },
        {
            "@id": "http://experiment.worldcat.org/entity/work/data/3805473256#Person/myers_karen_1953",
            "@type": "schema:Person",
            "birthDate": "1953",
            "familyName": "Myers",
            "givenName": "Karen",
            "name": "Karen Myers"
        },
        {
            "@id": "http://experiment.worldcat.org/entity/work/data/3805473256#Series/the_chained_adept",
            "@type": "bgn:PublicationSeries",
            "hasPart": "http://www.worldcat.org/oclc/957077876",
            "name": "The chained adept ;"
        },
        {
            "@id": "http://id.loc.gov/vocabulary/countries/pau",
            "@type": "schema:Place",
            "identifier": "pau"
        },
        {
            "@id": "http://worldcat.org/isbn/9781629620329",
            "@type": "schema:ProductModel",
            "isbn": [
                "9781629620329",
                "1629620327"
            ]
        },
        {
            "@id": "http://www.worldcat.org/oclc/957077876",
            "@type": [
                "schema:CreativeWork",
                "schema:Book"
            ],
            "oclcnum": "957077876",
            "placeOfPublication": "http://id.loc.gov/vocabulary/countries/pau",
            "about": "http://dewey.info/class/813.6/e23/",
            "author": "http://experiment.worldcat.org/entity/work/data/3805473256#Person/myers_karen_1953",
            "bookEdition": "First edition.",
            "bookFormat": "bgn:PrintBook",
            "datePublished": "2016",
            "exampleOfWork": "http://worldcat.org/entity/work/id/3805473256",
            "genre": [
                {
                    "@language": "en",
                    "@value": "Fantasy fiction"
                },
                {
                    "@language": "en",
                    "@value": "Fiction"
                }
            ],
            "inLanguage": "en",
            "isPartOf": "http://experiment.worldcat.org/entity/work/data/3805473256#Series/the_chained_adept",
            "name": {
                "@language": "en",
                "@value": "Mistress of animals"
            },
            "productID": "957077876",
            "workExample": "http://worldcat.org/isbn/9781629620329",
            "describedby": "http://www.worldcat.org/title/-/oclc/957077876"
        },
        {
            "@id": "http://www.worldcat.org/title/-/oclc/957077876",
            "@type": [
                "genont:ContentTypeGenericResource",
                "genont:InformationResource"
            ],
            "inDataset": "http://purl.oclc.org/dataset/WorldCat",
            "about": "http://www.worldcat.org/oclc/957077876",
            "dateModified": "2022-01-04"
        }
    ],
    "@context": {
        "author": {
            "@id": "http://schema.org/author",
            "@type": "@id"
        },
        "name": {
            "@id": "http://schema.org/name"
        },
        "genre": {
            "@id": "http://schema.org/genre"
        },
        "inLanguage": {
            "@id": "http://schema.org/inLanguage"
        },
        "productID": {
            "@id": "http://schema.org/productID"
        },
        "bookFormat": {
            "@id": "http://schema.org/bookFormat",
            "@type": "@id"
        },
        "workExample": {
            "@id": "http://schema.org/workExample",
            "@type": "@id"
        },
        "datePublished": {
            "@id": "http://schema.org/datePublished"
        },
        "describedby": {
            "@id": "http://www.w3.org/2007/05/powder-s#describedby",
            "@type": "@id"
        },
        "oclcnum": {
            "@id": "http://purl.org/library/oclcnum"
        },
        "exampleOfWork": {
            "@id": "http://schema.org/exampleOfWork",
            "@type": "@id"
        },
        "bookEdition": {
            "@id": "http://schema.org/bookEdition"
        },
        "about": {
            "@id": "http://schema.org/about",
            "@type": "@id"
        },
        "isPartOf": {
            "@id": "http://schema.org/isPartOf",
            "@type": "@id"
        },
        "placeOfPublication": {
            "@id": "http://purl.org/library/placeOfPublication",
            "@type": "@id"
        },
        "familyName": {
            "@id": "http://schema.org/familyName"
        },
        "givenName": {
            "@id": "http://schema.org/givenName"
        },
        "birthDate": {
            "@id": "http://schema.org/birthDate"
        },
        "identifier": {
            "@id": "http://purl.org/dc/terms/identifier"
        },
        "hasPart": {
            "@id": "http://schema.org/hasPart",
            "@type": "@id"
        },
        "dateModified": {
            "@id": "http://schema.org/dateModified"
        },
        "inDataset": {
            "@id": "http://rdfs.org/ns/void#inDataset",
            "@type": "@id"
        },
        "isbn": {
            "@id": "http://schema.org/isbn"
        },
        "schema": "http://schema.org/",
        "library": "http://purl.org/library/",
        "genont": "http://www.w3.org/2006/gen/ont#",
        "void": "http://rdfs.org/ns/void#",
        "rdf": "http://www.w3.org/1999/02/22-rdf-syntax-ns#",
        "bgn": "http://bibliograph.net/",
        "xsd": "http://www.w3.org/2001/XMLSchema#",
        "dcterms": "http://purl.org/dc/terms/",
        "wdrs": "http://www.w3.org/2007/05/powder-s#",
        "pto": "http://www.productontology.org/id/"
    }
}
```

## Zenodo

Zenodo supports JSON-LD by content negotiation.

```curl -H 'Accept: application/ld+json' https://zenodo.org/api/records/3538376```

- :warning: Note that if the Zenodo item has a non-Zenodo DOI then `@id` uses that DOI, hence the statements below are linked to the CrossRef DOI for the article `10.3897/phytokeys.36.7386` not the Zenodo record id `576210`.

```json
{
  "description": "<p>A new species of <i>Gymnanthemum</i> (Compositae, Vernonieae) from South Africa is described. It can be distinguished from other species in the genus by the five-flowered capitula and widely obtuse leaf blades.</p>",
  "license": "http://creativecommons.org/licenses/by/4.0/legalcode",
  "creator": [{
      "affiliation": "Smithsonian Institution, Washington, DC, United States of America",
      "@type": "Person",
      "name": "Robinson, Harold"
    },
    {
      "affiliation": "Smithsonian Institution, Washington DC, United States of America",
      "@type": "Person",
      "name": "Funk, Vicki"
    }
  ],
  "headline": "Gymnanthemum koekemoerae (Compositae, Vernonieae), a new species from South Africa",
  "image": "https://zenodo.org/static/img/logos/zenodo-gradient-round.svg",
  "datePublished": "2014-04-30",
  "url": "https://zenodo.org/record/576210",
  "keywords": [
    "Asteraceae",
    "Compositae",
    "Gymnanthemum",
    "South Africa",
    "Vernonieae"
  ],
  "@context": "https://schema.org/",
  "identifier": "https://doi.org/10.3897/phytokeys.36.7386",
  "@id": "https://doi.org/10.3897/phytokeys.36.7386",
  "@type": "ScholarlyArticle",
  "name": "Gymnanthemum koekemoerae (Compositae, Vernonieae), a new species from South Africa"
}
```
