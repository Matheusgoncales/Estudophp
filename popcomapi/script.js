
// fetch('https://restcountries.com/v3.1/all').then(response => {
//     return response.json()
// }).then(countryscard => {   
//     console.log(countryscard)
// })
//     countryscard.forEach(element => {
//         document.querySelector("#countrys").innerHTML += addcountry(element.ccn3, element.name.official, element.population, element.region, element.capital, element.flags.png)
//         let cards = document.querySelectorAll(".country")
//         cards.forEach(e => {
//             e.addEventListener('click', function () {
//                 fetch(`https://restcountries.com/v3.1/alpha/${e.id}`).then(response2 => {
//                     return response2.json()
//                 }).then(page => {
//                     page.forEach(element => {
//                         document.querySelector("#countrys2").style.display = "flex"
//                         document.querySelector(".infocountrys").innerHTML = pagecountry(element.flags.png, element.name.official, element.name.common, element.population, element.region, element.subregion, element.capital, element.tld[0], element.currencies[0], element.languages.spa)
//                         document.querySelector(".filters").style.display = "none"
//                         document.querySelector("#countrys").style.display = "none"
//                     })

//                     document.querySelector(".back").addEventListener('click', function () {
//                         let cards = document.querySelectorAll(".country")
//                         cards.forEach(e => {
//                             document.querySelector(".filters").style.display = "flex"
//                             document.querySelector("#countrys").style.display = "flex"
//                             document.querySelector("#countrys2").style.display = "none"
//                         })
//                     })
//                 })
//             })
//         })
//     });
// })

let cards = document.querySelectorAll(".country")
        cards.forEach(e => {
            e.addEventListener('click', function () {
                fetch(`https://restcountries.com/v3.1/alpha/${e.id}`).then(response2 => {
                    return response2.json()
            }).then(page => {
                page.forEach(element => {
                let currencies = Object.values(element.currencies)
                document.querySelector("#countrys2").style.display = "flex"
                document.querySelector(".infocountrys").innerHTML = pagecountry(element.flags.png, element.name.official, element.name.common, element.population, element.region, element.subregion, element.capital, element.tld[0], currencies[0].name, Object.values(element.languages).toString())
                document.querySelector(".filters").style.display = "none"
                document.querySelector("#countrys").style.display = "none"
             })
         })
     })
 })


const search = document.querySelector("#search")
search.addEventListener('input', searchflags)
function searchflags() {
    const flags = document.querySelectorAll(".country")
    if (search.value != '') {
        for (nomeflag of flags) {
            let title = nomeflag.querySelector("#name")
            title = title.textContent.toLowerCase()
            let searchtext = search.value.toLowerCase()

            if (!title.includes(searchtext)) {
                nomeflag.style.display = "none"
            }
            else {
                nomeflag.style.display = "block"
            }
        }
    }
    else if (search.value == "") {
        for (nomeflag of flags) {
            nomeflag.style.display = ""
        }
    }
}

document.querySelector(".btnfilter").addEventListener('click', function () {
    let filterregion = document.querySelector(".filterregioncard")
    if (filterregion.style.display == "none") {
        filterregion.style.display = "block"
    }
    else {
        const flags = document.querySelectorAll(".country")
        for (nomeregion of flags) {
            nomeregion.style.display = "block"
        }
        filterregion.style.display = "none"
    }
})

document.querySelector(".back").addEventListener('click', function () {
    let cards = document.querySelectorAll(".country")
    cards.forEach(e => {
        document.querySelector(".filters").style.display = "flex"
        document.querySelector("#countrys").style.display = "flex"
        document.querySelector("#countrys2").style.display = "none"
    })
})

document.querySelectorAll(".filterp").forEach(e => {
    e.addEventListener('click', function () {
        const flags = document.querySelectorAll(".country")
        for (nomeregion of flags) {
            let region = nomeregion.querySelector(".region")
            region = region.textContent.toLowerCase()
            let regiontext = e.id
            console.log(regiontext)

            if (!region.includes(regiontext)) {
                nomeregion.style.display = "none"
            }
            else {
                nomeregion.style.display = "block"
            }
        }
    })
})

// function addcountry(id, namecountry, population, region, capital, flag) {
//     var country = `
//     <div class="country" id="${id}">
//                     <div class="flag"><img class="flag" src="${flag}"></div>
//                     <div class="info">
//                         <div class="infocountryp" id="name">${namecountry}</div>
//                         <div class="infocountryp" id="population">Population:<p class="population">${population}</p></div>
//                         <div class="infocountryp" id="region">Region:<p class="region">${region}</p></div>
//                         <div class="infocountryp" id="capital">Capital: <p class="capital">${capital}</p></div>
//                     </div>
//                 </div>`
//     return country
// }

function pagecountry(flagpage, namecountrypage, nativenamepage, populationpage, regionpage, subregpage, capitalpage, toplvlpage, currenciepage, languagepage) {
    var page = `
    
        <div class="flagcountry"><img class="imgpage" src="${flagpage}"></div>
        <div class="infocountrypg2">
            <div id="name">
                <h2 class="name">${namecountrypage}</h2>
            </div>
            <div class="detailsinfo">
                <div class="leftside">
                    <div class="infocountryp" id="native">Native Name: <p id="pidentity" class="native">
                            ${nativenamepage}</p>
                    </div>
                    <div class="infocountryp" id="population">Population: <p id="pidentity" class="population">
                            ${populationpage}</p>
                    </div>
                    <div class="infocountryp" id="region">Region: <p class="region">${regionpage}</p>
                    </div>
                    <div class="infocountryp" id="subregion">Sub Region: <p id="pidentity" class="subregion">
                            ${subregpage}</p>
                    </div>
                    <div class="infocountryp" id="capital">Capital: <p id="pidentity" class="capital">${capitalpage}</p>
                    </div>
                </div>
                <div class="rightside">
                    <div class="infocountryp" id="toplevel">Top Level Domain: <p id="pidentity" class="toplevel">
                            ${toplvlpage}</p>
                    </div>
                    <div class="infocountryp" id="currencies">Currencies: <p id="pidentity" class="currencies">
                            ${currenciepage}</p>
                    </div>
                    <div class="infocountryp" id="languages">Languages: <p id="pidentity" class="">${languagepage}</p>
                    </div>
                </div>
            </div>
            <div class="bordercountries">
            </div>
        </div>`
    return page
}
