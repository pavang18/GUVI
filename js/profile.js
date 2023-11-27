jQuery(document).ready(function(){
    jQuery('#update').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'php/profile.php',
            type: 'post',
            data: {
                age : $('#age').val(),
                dob: $('#dob').val(),
                contact: $('#contact').val(),
                
            },
            success: function(response){
                $('#message').html(response);
            }
        });
    });
});




function updateProfile() {
    
    var gender=document.getElementById('gender').value;
    var age = document.getElementById('age').value;
    var dob = document.getElementById('dob').value;
    var ContactNo = document.getElementById('mobile').value;
    var address = document.getElementById('address').value;

    
    document.getElementById("genderValue").innerText = gender;
    document.getElementById("ageValue").innerText = age;
    document.getElementById("DateofBirth").innerText = dob;
    document.getElementById("mobValue").innerText = ContactNo;
    document.getElementById("addressValue").innerText = address;
}