function postComment() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();

    // Instantiating the request object
    request.open("POST", "db.php");

    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if (this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    // Retrieving the form data
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Sending the request to the server
    request.send(formData);
}