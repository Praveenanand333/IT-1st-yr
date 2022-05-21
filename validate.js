function validate() {
    var firstname = document.myform.FirstName.value;
    alert(typeof document.myform.smallpox.value);
    var lastname = document.myform.LastName.value;
    var address = document.myform.address.value;
    if (firstname == "" || lastname == "" || address == "") {
        alert('NO FIELD SHOULD BE EMPTY');
        return false;
    }
    var medication = document.myform.a.value;
    var area = document.myform.area.value;

    if (medication == 'yes') {
        if (area == '') {
            alert('please fill the blank area');
            return false;
        }
    }
    var gender = document.myform.gender.value;
    var nationality = document.myform.nationality.value;
    // var smallpox = "no";
    // var mumps = "no";
    // var Dizziness = "no";
    // var Sneezing = "no";
    // if (typeof document.myform.smallpox.value != 'undefined') {
    //     var smallpox = document.myform.smallpox.value;
    //     alert('smallpox' + smallpox);
    // }
    // if (typeof document.myform.mumps.value != 'undefined') {
    //     var mumps = document.myform.mumps.value;
    //     alert('mumps' + mumps);
    // }
    // if (typeof document.myform.Dizziness.value != 'undefined') {
    //     var Dizziness = document.myform.Dizziness.value;
    //     alert('dizziness' + Dizziness);
    // }
    // if (typeof document.myform.Sneezing.value != 'undefined') {
    //     var Sneezing = document.myform.Sneezing.value;
    //     alert('sneezing' + Sneezing);
    // }
    // Dizziness = document.myform.Dizziness.value;
    // Sneezing = document.myform.Sneezing.value;
    alert(firstname);
    alert(lastname);
    alert(gender);
    alert(nationality);
    alert(address);



}