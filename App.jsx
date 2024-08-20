import React, { useState } from "react"; 
import "./App.css"; 
import Student from "./Student"; // Capitalized "Student"

function App() {
    const [name, setName] = useState("Ravi");

    return (
        <div className="App"> 
            <h1>Props in React :)</h1> 

            <Student name={name} />

            <button onClick={() => { setName("Kumar") }}>Update Name</button>

            {/* 
            <Student name={"Rites"} email="Rites engineer2001@mail.com" other={{Address: "Delhi", mobile: "9560638548"}}/>
            <Student name={"Manis"} email="Manis engineer2001@mail.com" other={{Address: "Delhi", mobile: "9560638548"}}/>
            <Student name={"Sonu"} email="Sonu engineer2001@mail.com" other={{Address: "Mumbai", mobile: "9560638548"}}/>
            <Student name={"Ravi"} email="Ravi engineer2001@mail.com" other={{Address: "Panaji", mobile: "9560638548"}}/>
            <Student name={"Ravi"} email="Ravi engineer2001@mail.com" other={{Address: "Delhi", mobile: "9560638548"}}/> 
            */}
        </div>
    );
}

export default App;
