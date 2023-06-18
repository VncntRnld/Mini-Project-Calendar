const form = document.getElementsByTagName("form")[0],
    warning = document.getElementById("warning"),
    nama = document.getElementById("namaEvent"),
    loc = document.getElementById("location"),
    startDate = document.getElementById("startDate"),
    startTime = document.getElementById("startTime"),
    endDate = document.getElementById("endDate"),
    endTime = document.getElementById("endTime"),
    priority = document.getElementById("priority"),
    imagePath = document.getElementById("image");


document.getElementsByTagName("form")[0].addEventListener("submit", (e) =>{

    warning.innerHTML = "";
    nama.removeAttribute("class");


    if(nama.value == ""){
        warning.innerHTML += "Please input EVENT NAME<br>";
        nama.setAttribute("class", "warningBox");
    }

    if(loc.value == ""){
        warning.innerHTML += "Please input LOCATION<br>";
        loc.setAttribute("class", "warningBox");
    }

    if(startDate.value == ""){
        warning.innerHTML += "Please input START DATE<br>";
        startDate.setAttribute("class", "warningBox");
    }

    if(startTime.value == ""){
        warning.innerHTML += "Please input START TIME<br>";
        startTime.setAttribute("class", "warningBox");
    }

    if(endDate.value == ""){
        warning.innerHTML += "Please input END DATE<br>";
        endDate.setAttribute("class", "warningBox");
    } else if (endDate.value == startDate.value) {
        warning.innerHTML += "END DATE can NOT be the same as START DATE<br>";
        endDate.setAttribute("class", "warningBox");
    } 

    if(endTime.value == ""){
        warning.innerHTML += "Please input END TIME<br>";
        endTime.setAttribute("class", "warningBox");
    }

    // PRIORITY CHECK
    var prio = document.getElementsByName("priority");
    var checkedPriority = false;

    console.log(prio);
    prio.forEach( function(n) {
        if(n.checked) {
            checkedPriority = true;
        }
    });
    console.log(checkedPriority);

	if (!checkedPriority) {
        warning.innerHTML += "Please choose PRIORITY<br>";
        // priority.setAttribute("class", "warningBox");
	}

    
    
    var validExt = ["png","jpg","jpeg"];
    var extImage = imagePath.value.split(".").pop().trim().toLowerCase();
    if (!(validExt.includes(extImage)) && (imagePath.value) != "") {
        warning.innerHTML += "IMAGE EXTENSIONS NOT VALID";
        endTime.setAttribute("class", "warningBox");
    }
    

    console.log(warning);
    // Reset if no warning triggered...
    if(warning.innerHTML != ""){
        warning.removeAttribute("hidden");
        e.preventDefault();
    }

})



function sendData() {
    var xhr = XMLHttpRequest();

    var params = "name=" + encodeURIComponent(nama.value) +
                "&location=" + encodeURIComponent(loc.value) +
                "&startDate=" + encodeURIComponent(startDate.value) + 
                "&startTime=" + encodeURIComponent(startTime.value) + 
                "&endDate=" + encodeURIComponent(endDate.value) + 
                "&endTime=" + encodeURIComponent(endTime.value) + 
                "&priority=" + encodeURIComponent(priority.value);

    
    console.log(params);

    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        } else {
            console.log("Request Failed");
        }

    };

    xhr.open("POST", "createValid.php?" + params, true);
    xhr.send();

}