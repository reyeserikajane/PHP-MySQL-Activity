const logout = document.getElementById("logout")
logout.addEventListener('click', ()=>{
    try {

        fetch(`includes/logout.inc.php`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response => {
            if(response.ok){
                console.log("Logout")
                window.location = '/PHP-MySQL-Activity/index.php'
            }
        })
        
    } catch (error) {
        console.error(error)
    }
   
})