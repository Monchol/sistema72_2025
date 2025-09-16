const ms = 3000;

const sleep = (ms)=> {
    return new Promise(resolve => setTimeout(resolve, ms));
}

window.addEventListener('load', async()=>{
    document.body.innerHTML = '<h2 style="text-align:center; margin-top: 50px;">Redirecting...</h2>';

    await sleep(ms);
    // Simulate an HTTP redirect:
    window.location.replace("/admin.php");
})

