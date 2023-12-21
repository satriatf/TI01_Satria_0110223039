function auth(){
    const username ="sat"
    const password ="123"

    // tangkap input user
    let userinput = document.getElementById("username").value
    let passwordinput = document.getElementById("password").value

    if (username == userinput && password == passwordinput){
        alert("Login Berhasil")
        document.location="home.html"
    
    }else{
        alert("Login Gagal")
    }
}