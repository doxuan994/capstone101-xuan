var mood;

// Submit form with id function
function submit_by_id() {
    mood = document.querySelector('input[name = mood]:checked').value;
    alert("Mood : " + mood + " \nForm Id : " + document.getElementById("form_id").getAttribute("id"));
}


    