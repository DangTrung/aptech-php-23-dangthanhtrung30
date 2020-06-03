
var data = {
    "users": [{
            "id": 10,
            "name": "Ethyl Medhurst",
            "email": "noah.hand@example.org",
            "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
            "created_at": "2019-03-26 04:55:04",
            "updated_at": "2019-03-26 04:55:04"
        },
        {
            "id": 9,
            "name": "Eula Lebsack PhD",
            "email": "schroeder.sylvan@example.org",
            "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
            "created_at": "2019-03-26 04:55:03",
            "updated_at": "2019-03-26 04:55:03"
        },
        {
            "id": 8,
            "name": "Mrs. Kathlyn Parisian DDS",
            "email": "ggrimes@example.net",
            "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
            "created_at": "2019-03-26 04:55:03",
            "updated_at": "2019-03-26 04:55:03"
        }
    ]
};

function update() {
    var tableBodyElement = document.getElementById('table-body');
    var tableHeadElement =document.getElementById('table-head');
    var users = data.users;
    var getUserElementData = Object.keys(users[0]);
    // console.log(getUserElementData)
    var tableRow = document.createElement("tr");
     tableHeadElement.appendChild(tableRow);
     for(var i=0;i<getUserElementData.length;i++)
     {
         var tableData = document.createElement("th");
            tableRow.appendChild(tableData);
            tableData.innerHTML = getUserElementData[i];
     }
    
    // console.log(Object.keys(data));

    // console.log(users);
    for (var i = 0; i < users.length; i++) {
        var tableRow = document.createElement("tr");
        tableBodyElement.appendChild(tableRow);
        var getUserElementData = Object.keys(users[i]);
        // console.log(getUserElementData);
        for (var j = 0; j < getUserElementData.length; j++) {
            var tableData = document.createElement("td");
            tableData.innerHTML = users[i][getUserElementData[j]];
            tableRow.appendChild(tableData);
        }
    }
}