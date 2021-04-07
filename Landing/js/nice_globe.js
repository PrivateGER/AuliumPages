let topContainer = document.getElementById("topContainer");

globe = new ENCOM.Globe(topContainer.clientWidth - 2 * 10, window.innerHeight / 2, {
    font: "Inconsolata",
    data: [],
    tiles: grid.tiles,
    baseColor: "#b20000",
    markerColor: "#228B22",
    pinColor: "#aacfd1",
    satelliteColor: "#aacfd1",
    scale: 1.1,
    dayLength: 14000,
    introLinesDuration: 2000,
    maxPins: 500,
    maxMarkers: 4,
    viewAngle: 0.3
});
window.globe = globe;

document.getElementById('globeContainer').appendChild(globe.domElement);

function animate() {
    if (globe) {
        globe.tick();
    }
    requestAnimationFrame(animate);
}

let initGlobe = () => {
    globe.init();
    animate();

    userServerLink();
    addIPMarker("172.67.197.57", globe, false);
    addIPMarker("104.21.60.137", globe, false);
    
    var constellation = [];
    var opts = {
        coreColor: "#ff0000",
        numWaves: 8
    };
    var alt = 1.1;

    for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 4; j++) {
            constellation.push({
                lat: 50 * i - 30 + 15 * Math.random(),
                lon: 120 * j - 120 + 30 * i,
                altitude: alt
            });
        }
    }

    globe.addConstellation(constellation, opts);
}

let userServerLink = (globe) => { // calculates difference from user geo-ip to nuernberg data center and adds according markers
    fetch('https://ip-api.io/json/')
    .then(r => r.text())
    .then(r => {
        let userGeo = JSON.parse(r);
        fetch('https://ip-api.io/json/78.46.193.215')
        .then(r => r.text())
        .then(r => {
            let serverGeo = JSON.parse(r);

            let distance = Math.abs(userGeo.longitude - serverGeo.longitude);
            let linkMarkers = distance > 30;

            addIPMarker("", window.globe, linkMarkers);
            addIPMarker("78.46.193.215", window.globe, linkMarkers);
        });
    });
}

let addIPMarker = (ip, globe, link = false) => {
    fetch('https://ip-api.io/json/' + ip).then(r => r.text()).then(r => {
        let location = JSON.parse(r);
        globe.addMarker(location.latitude, location.longitude, location.ip, link); 
    });
};

window.addEventListener('resize', () => {
    let h = window.innerHeight / 2;
    globe.camera.aspect = window.innerWidth / h;
    globe.camera.updateProjectionMatrix();
    globe.renderer.setSize(topContainer.clientWidth - 2 * 10, h);
})

initGlobe();