let step1 = document.querySelector(".boxstep1").style.display
//dou a cor ao primeiro numero (step)
if (step1 == "") {
    document.querySelector("#um").style.backgroundColor = "hsl(206, 94%, 87%)"
    document.querySelector("#um").style.color = "black"
}
document.querySelector(".goback").style.opacity = "0";

//aqui comecamos a funcao do primeiro botao do next, fazendo assim toda a verificaçao dos inputs
 //para se estiver tudo certo, passar para o proximo step
function next1() {
    var emailvalid = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    let validation = ""

    if (document.querySelector("#email").value == "") {
        document.querySelector("#email").style.border = "1px solid hsl(4, 100%, 67%)"
        document.querySelector(".erroremail").innerHTML = "This field is required";
    }
    if (document.querySelector("#email").value.match(emailvalid)) {
    }
    else {
        document.querySelector("#email").style.border = "1px solid hsl(4, 100%, 67%)"
        document.querySelector(".erroremail").innerHTML = "Email required or Email Invalid";
        validation = "invalid"
    }

    if (document.querySelector("#name").value == "") {
        document.querySelector("#name").style.border = "1px solid hsl(4, 100%, 67%)"
        document.querySelector(".errorname").innerHTML = "This field is required";
    }
    else {

    }
    if (document.querySelector("#phone").value == "") {
        document.querySelector("#phone").style.border = "1px solid hsl(4, 100%, 67%)"
        document.querySelector(".errorphone").innerHTML = "This field is required";
    }

    if (validation == "invalid") {
        alert("Please check all fields")
    }
    else {
        document.querySelector(".boxstep1").style.display = "none"
        document.querySelector(".boxstep2").style.display = "flex"
        document.querySelector("#dois").style.backgroundColor = "hsl(206, 94%, 87%)"
        document.querySelector("#dois").style.color = "black"
        document.querySelector("#um").style.backgroundColor = "transparent"
        document.querySelector("#um").style.color = "rgb(255, 255, 255)"
    }

    document.querySelector(".Yearly").style.color = "hsl(231, 11%, 63%)"

    const name = document.querySelector("#name").value
    const email = document.querySelector("#email").value
    const phone = document.querySelector("#phone").value
}
//libero o botao de goback a partir deste momento
document.querySelector(".goback").style.opacity = "100"

// fazendo a checagem do valor do range para verificarmos se o cliente solicitou para mes ou para ano o plano dele
slider = document.querySelector("#range")
slider.addEventListener('click', function () {
    let valuebar = document.querySelector("#range").value
    console.log(valuebar)
    if (valuebar == "1") {
            document.querySelector(".Monthly").style.color = "hsl(231, 11%, 63%)"
            document.querySelector(".Yearly").style.color = "hsl(213, 96%, 18%)"
            document.querySelector("#price1").innerHTML = "$"+ `<span class="Price" id="nmr1">9</span>`+ "/yr"
            let number = document.querySelector("#nmr1").innerText;
            document.querySelector("#nmr1").innerHTML =number * 10
            document.querySelector("#price2").innerHTML = "$"+ `<span class="Price" id="nmr2">12</span>`+ "/yr"
            let number2 = document.querySelector("#nmr2").innerText;
            document.querySelector("#nmr2").innerHTML =number2 * 10
            document.querySelector("#price3").innerHTML = "$"+ `<span class="Price" id="nmr3">15</span>`+ "/yr"
            let number3 = document.querySelector("#nmr3").innerText;
            document.querySelector("#nmr3").innerHTML =number3 * 10
    }
    else{
        document.querySelector(".Yearly").style.color = "hsl(231, 11%, 63%)"
        document.querySelector(".Monthly").style.color = "hsl(213, 96%, 18%)"
        document.querySelector("#price1").innerHTML = "$"+ `<span class="Price" id="nmr1">9</span>`+ "/mo"
        document.querySelector("#price2").innerHTML = "$"+ `<span class="Price" id="nmr2">12</span>`+ "/mo"
        document.querySelector("#price3").innerHTML = "$"+ `<span class="Price" id="nmr3">15</span>`+ "/mo"
    }
})




let checknext = ""
document.querySelectorAll(".arcade").forEach(element => {
//aqui comeca a funcao para vermos qual será o plano escolido pelo cliente
    element.addEventListener('click', function (clickcards) {
        let click = element.id
        let range = document.querySelector("#range").value
        console.log(click)
        if (click == 'arcadeid') {
            checknext = "valid"
            if (range == "0") {
                document.querySelector(".arcade4").innerHTML = 'Arcade' + "(Monthly)"
                document.querySelector("#arcademon").innerHTML = 9
                document.querySelector("#Arcade").value = "Arc-mo"
                checknext = "valid"
            }
            else {
                document.querySelector(".arcade4").innerHTML = 'Arcade' + "(Yearly)"
                document.querySelector(".price4").innerHTML = "$" + `<span id="arcademon"></span>` + "/yr"
                document.querySelector("#arcademon").innerHTML = 90
                document.querySelector("#Arcade").value = "Arc-yr"
                checknext = "valid"
            }
        }
        else if (click == 'proid') {

            checknext = "valid"
            if (range == "0") {
                document.querySelector(".arcade4").innerHTML = 'Pro' + "(Monthly)"
                document.querySelector("#arcademon").innerHTML = 15
                document.querySelector("#Pro").value = "Pro-mo"
                checknext = "valid"
            }
            else {
                document.querySelector(".arcade4").innerHTML = 'Pro' + "(Yearly)"
                document.querySelector(".price4").innerHTML = "$" + `<span id="arcademon"></span>` + "/yr"
                document.querySelector("#arcademon").innerHTML = 150
                document.querySelector("#Pro").value = "Pro-yr"
                checknext = "valid"
            }
        }
        else {

            checknext = "valid"
            if (range == "0") {
                document.querySelector(".arcade4").innerHTML = 'Advanced' + "(Monthly)"
                document.querySelector("#arcademon").innerHTML = 12
                document.querySelector("#Advanced").value = "Adv-mo"
                checknext = "valid"
            }
            else {
                document.querySelector(".arcade4").innerHTML = 'Advanced' + "(Yearly)"
                document.querySelector(".price4").innerHTML = "$" + `<span id="arcademon"></span>` + "/yr"
                document.querySelector("#arcademon").innerHTML = 120
                document.querySelector("#Advanced").value = "Adv-yr"
                checknext = "valid"
            }
        }

    })

})

//verificacao de todos os campos inputs para a validacao dos mesmo e permitir que o cliente passe para o proximo step
function next2() {
    let valuebar = document.querySelector("#range").value
    if (checknext != "") {
        document.querySelector(".boxstep2").style.display = "none"
        document.querySelector(".boxstep3").style.display = "flex"
        document.querySelector("#tres").style.backgroundColor = "hsl(206, 94%, 87%)"
        document.querySelector("#tres").style.color = "black"
        document.querySelector("#dois").style.backgroundColor = "transparent"
        document.querySelector("#dois").style.color = "rgb(255, 255, 255)"
    }
    else { alert("you need choose a plan") }

    if (valuebar == 1) {
        document.querySelector("#valuelarger").innerHTML = '+$20/yr'
        document.querySelector("#valueonline").innerHTML = '+$10/yr'
        document.querySelector("#valuecustom").innerHTML = '+$20/yr'
    }
    else{
        document.querySelector("#valuelarger").innerHTML = '+$2/mo'
        document.querySelector("#valueonline").innerHTML = '+$1/mo'
        document.querySelector("#valuecustom").innerHTML = '+$2/mo'
    }

}



function back2() {
    document.querySelector(".boxstep2").style.display = "none"
    document.querySelector(".boxstep1").style.display = "flex"
}

document.querySelector("#goback3").style.opacity = "100";
//verificacao do range e tambem de qual o servico o cliente escolheu, aqui podemos liberar para nao ter validacao pois o mesmo pode nao querer nenhum servico extra
//caso queira um servico extra, será validado se foi escolhido no step anterior se foi anual ou mensal, e de acordo com a escolha interfere no valor deste step
let online = document.querySelector("#online")
let larger = document.querySelector("#larger")
let custom = document.querySelector("#custumizable")
online.addEventListener('change', function (el) {
    let valuebar = document.querySelector("#range").value
    if (online.checked == true && valuebar == 0) {
        document.querySelector(".divinf").innerHTML += divcheckbox("onlinet", "Online service", 1, "/mo")
        online.cheked = false
        document.querySelector("#online").value = "online-mo"
    }
    else if (online.checked == true && valuebar == 1) {
        document.querySelector(".divinf").innerHTML += divcheckbox("onlinet", "Online service", 1 * 10, "/yr")
        document.querySelector("#online").value = "online-yr"
    }
    else { document.querySelector(".infosbuy#onlinet").remove() }
})
larger.addEventListener('change', function (el) {
    let valuebar = document.querySelector("#range").value
    if (larger.checked == true && valuebar == 0) {
        document.querySelector(".divinf").innerHTML += divcheckbox("largert", "Large service", 2, "/mo")
        document.querySelector("#larger").value = "larger-mo"
    }
    else if (larger.checked == true && valuebar == 1) {
        document.querySelector(".divinf").innerHTML += divcheckbox("largert", "Large service", 2 * 10, "/yr")
        document.querySelector("#larger").value = "larger-yr"
    }
    else { document.querySelector(".infosbuy#largert").remove() }
})
custom.addEventListener('change', function (el) {
    let valuebar = document.querySelector("#range").value
    if (custom.checked == true && valuebar == 0) {
        document.querySelector(".divinf").innerHTML += divcheckbox("custumizet", "Custumizable service", 2, "/mo")
        document.querySelector("#custumizable").value = "custom-mo"
    }
    else if (custom.checked == true && valuebar == 1) {
        document.querySelector(".divinf").innerHTML += divcheckbox("custumizet", "Custumizable service", 2 * 10, "/yr")
        document.querySelector("#custumizable").value = "custom-yr"
    }
    else { document.querySelector(".infosbuy#custumizet").remove() }

})


function next3() {
    document.querySelector(".boxstep3").style.display = "none"
    document.querySelector(".boxstep4").style.display = "flex"
    document.querySelector("#quatro").style.backgroundColor = "hsl(206, 94%, 87%)"
    document.querySelector("#quatro").style.color = "black"
    document.querySelector("#tres").style.backgroundColor = "transparent"
    document.querySelector("#tres").style.color = "rgb(255, 255, 255)"


    let valuebar = document.querySelector("#range").value
    let planvalue = parseInt(document.querySelector("#arcademon").innerHTML)
    let res = 0;
    document.querySelectorAll("#valor").forEach(e => {
        res += parseInt(e.innerHTML)
    })

    if (valuebar == "1") {
        document.querySelector(".totalvalue").innerHTML = '+' + `<span class="price4" id="totalprice"></span>` + '/yr'
        document.querySelector("#totalprice").innerHTML = planvalue + res
    }
    else {
        document.querySelector(".totalvalue").innerHTML = '+' + `<span class="price4" id="totalprice"></span>` + '/mo'
        document.querySelector("#totalprice").innerHTML = planvalue + res
    }

    document.querySelector(".changep").addEventListener('click', function (e) {
        document.querySelector(".boxstep4").style.display = "none"
        document.querySelector(".boxstep1").style.display = "flex"
        document.querySelector("#um").style.backgroundColor = "hsl(206, 94%, 87%)"
        document.querySelector("#um").style.color = "black"
        document.querySelector("#quatro").style.backgroundColor = "transparent"
        document.querySelector("#quatro").style.color = "rgb(255, 255, 255)"
    })

}

function back3() {
    document.querySelector(".boxstep3").style.display = "none"
    document.querySelector(".boxstep2").style.display = "flex"
}




function confirm() {
    document.querySelector(".boxstep4").style.display = "none"
    document.querySelector(".boxstepfinal").style.display = "flex"
    document.querySelector("#quatro").style.backgroundColor = "transparent"
    document.querySelector("#quatro").style.color = "rgb(255, 255, 255)"

    let plano = document.querySelector(".arcade4").innerHTML
    service = ""
    document.querySelectorAll(".service").forEach(e => {
        service += e.innerHTML
    })
    let total = parseInt(document.querySelector("#totalprice").innerHTML)


}

//envio do formulario e identacao para o formato json e ser encaminhado a api do banco de dados
document.querySelector("#global").addEventListener('submit', function (event) {
    event.preventDefault();

    // const formdata = new FormData()
    // const data = Object.fromEntries(formdata)


    // fetch("https://usebandup.websiteseguro.com/estagio_api/",{
    //     method: 'POST',
    //     headers: {
    //         'content-Type': 'application/json'
    //     },
    //     body: data
    // }).then(res => res.json()).then(data => console.log(data))

    var formdata = new FormData(event.currentTarget);
    // formdata.append("dawda", "dd");


    var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'
    };
    

    fetch("script.php", requestOptions)
        .then(response => response.json())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));

})

function divcheckbox(id, service, price, time) {
    let checkboxvalue =
        `<div class="infosbuy"id="${id}">
    <div class="pinfosbuy">
    <p class="service">${service}</p>
</div>
<div class="boxprice">
    <p class="price4">+ <span class="price4" id="valor">${price}</span>${time}</p>
</div>
</div>`
    return checkboxvalue
}

