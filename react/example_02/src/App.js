import React, { use, useState } from "react";
import Header from "./components/Header";
import Corpo from "./components/Corpo";

import './App.css';

export default function App() {
 const [num, setNum] = useState(0);

  return (
    <>
      <div className="container">
        <Header />
        <Corpo />

        <p className="texto">Texto com css </p>
        <p> Valor do states: {num} </p>
        <button onClick={() => setNum(num + 1)}>Incrementar</button>
      </div>
    </>
  );
}
