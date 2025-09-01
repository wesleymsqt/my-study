import React, { useState } from "react";
import Header from "./components/Header";
import Corpo from "./components/Corpo";
import Numero from "./components/Numero";
import Cumprimento from "./components/Cumprimento";

import "./App.css";

export default function App() {
  const [num, setNum] = useState(0);

  return (
    <>
      <div className="container">
        <Header />
        <Corpo />

        <p className="texto">Texto com css </p>
        <p>Valor do num em App: {num}</p>
        <Numero num={num} setNum={setNum} />
        
        <Cumprimento />
      </div>
    </>
  );
}
