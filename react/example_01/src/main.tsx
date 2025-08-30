import { StrictMode } from "react";
import { createRoot } from "react-dom/client";

import "./styles/global.css";
import "./styles/theme.css";

import { App } from "./App.tsx";

createRoot(document.getElementById("root")!).render(
  // Faz com que o React atualize a interface do usuário de forma mais eficiente
  <StrictMode>
    <App />
  </StrictMode>
);
