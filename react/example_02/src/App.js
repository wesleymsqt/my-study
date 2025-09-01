import React from "react";
import Header from "./components/Header";
import Corpo from "./components/Corpo";

import './App.css';

export default function App() {
  return (
    <>
      <div className="container">
        <Header />
        <Corpo />

        <p className="texto">lorem </p>
      </div>
    </>
  );
}
