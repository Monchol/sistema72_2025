const ms = 3000;

const sleep = (ms)=> {
    return new Promise(resolve => setTimeout(resolve, ms));
}

sleep(ms).then('redirecting...');

window.addEventListener('load', ()=>{
    // Simulate an HTTP redirect:
    window.location.replace("/admin.php");
})

