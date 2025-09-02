import React, { useState } from "react";
import "./App.css";
import Notas from "./components/Notas";

export default function App() {
  const [num, setNum] = useState(0);

  return (
    <>
      <div className="container">
        <Notas />
        
      </div>
    </>
  );
}
