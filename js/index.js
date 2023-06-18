let selectedTraining = "";
let trainingExist = false;

document.getElementById("selectDomainSeo").addEventListener("click", async ()=> {
    document.getElementById("dropdownMenuButton1").innerHTML = "SEO / Digital Marketing";
    document.getElementById("dropdownMenuButton2").innerHTML = "Formations <br /> Sélectionne ta formation";
    selectedTraining = "";
    document.getElementById("dropdownTraining").innerHTML = `
<span class = "dropdown-item-text text-white mt-3 font-weight-bold" > SEO / Digital Marketing < /span>
<span class="dropdown-item font-weight-light" style="cursor:pointer;" id="selectTrainingSeoStarter">Formation Starter</span>
<span class="dropdown-item font-weight-light" style="cursor:pointer;" id="selectTrainingSeoIntermediaire">Formation Intermediaire</span>
<span class="dropdown-item font-weight-light" style="cursor:pointer;" id="selectTrainingSeoEntrepreneur">Extension Entrepreneur</span>
    <br/>
    `;
    await listenerSeo();
})

document.getElementById("selectDomainWebdev").addEventListener("click", async ()=> {
    document.getElementById("dropdownMenuButton1").innerHTML = "Développeur Web";
    selectedTraining = "";
    document.getElementById("dropdownMenuButton2").innerHTML = "Formations <br /> Sélectionne ta formation";
    document.getElementById("dropdownTraining").innerHTML = `
    <span class="dropdown-item-text text-white mt-3 font-weight-bold">Développeur Web</span>
    <span class="dropdown-item font-weight-light" style="cursor:pointer" id="selectTrainingWebdevStarter">Formation Starter</span>
    <span class="dropdown-item font-weight-light" style="cursor:pointer" id="selectTrainingWebdevIntermediaire">Formation Intermédiaire</span>
    <span class="dropdown-item font-weight-light" style="cursor:pointer" id="selectTrainingWebdevFullstack">Formation Full Stack</span>
    <span class="dropdown-item font-weight-light" style="cursor:pointer" id="selectTrainingWebdevEntrepreneur">Extension Entrepreneur</span>
    <br/>
    `;
    await listenerWebdev();
})

document.getElementById("selectTraining").addEventListener("click", ()=> {
    trainingExist = false;

    if (selectedTraining === "webStarter") {
        window.location.href = "http://www.schooloftalents.org/pages/webdev-starter.php";
        trainingExist = true;
    }

    if (selectedTraining === "webIntermediaire") {
        window.location.href = "http://www.schooloftalents.org/pages/webdev-intermediaire.php";
        trainingExist = true;
    }

    if (selectedTraining === "webFullstack") {
        window.location.href = "http://www.schooloftalents.org/pages/webdev-fullstack.php";
        trainingExist = true;
    }

    if (!trainingExist) {
        alert("Cette formation n'est pas disponible pour le moment");
    }
})

document.getElementById("goToTestimonies").addEventListener("click", ()=>{
    window.location.href = "http://www.schooloftalents.org/pages/testimonies.php";
})

const listenerSeo = ()=> {
    document.getElementById("selectTrainingSeoStarter").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Starter";
        selectedTraining = "seoStarter";
    });
    document.getElementById("selectTrainingSeoIntermediaire").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Intermédiaire";
        selectedTraining = "seoIntermediaire";
    })
    document.getElementById("selectTrainingSeoEntrepreneur").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Entrepreneur";
        selectedTraining = "seoEntrepreneur";
    })
}

const listenerWebdev = ()=> {
    document.getElementById("selectTrainingWebdevStarter").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Starter";
        selectedTraining = "webStarter";
    });
    document.getElementById("selectTrainingWebdevIntermediaire").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Intermédiaire";
        selectedTraining = "webIntermediaire";
    })
    document.getElementById("selectTrainingWebdevFullstack").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Full Stack";
        selectedTraining = "webFullstack";
    })
    document.getElementById("selectTrainingWebdevEntrepreneur").addEventListener("click", ()=>{
        document.getElementById("dropdownMenuButton2").innerHTML = "Formation Entrepreneur";
        selectedTraining = "webEntrepreneur";
    })
}
