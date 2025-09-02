import React, { useState } from "react";
import "./App.css";
import Formulario from "./components/Formulario";

export default function App() {
  const [num, setNum] = useState(0);

  return (
    <>
      <div className="container">
        <Formulario />

      </div>
    </>
  );
}
