// Importando os componentes
// import { Heading } from "./components/Heading";
// import { Container } from "./components/Container";
// import { Logo } from "./components/Logo";
// import { Menu } from "./components/Menu";
// import { CountDown } from "./components/CountDown";
// import { Footer } from "./components/Footer";
// import { MainForm } from "./components/MainForm";

import { Home } from "./pages/Home";

import "./styles/global.css";
import "./styles/theme.css";

// Aqui estamos importando minha function direto
export function App() {
  // useState é um Hook do React que permite adicionar o estado a um componente funcional, e não usar atribuição diretamente
  
  // Retorna apenas um elemento JSX, por isso utilizo dentro de uma div ou <></>
  return <Home />;
    // <>
    //   <Container>
    //     <Heading>
    //       <Logo />
    //     </Heading>
    //   </Container>

      {/* 
      FAZ A MESMA COISA QUE O CÓDIGO ACIMA
      <div className="container">
        <div className="content">
          <section>Logo</section>
        </div>
      </div> 
      */}

      {/* <Container>
        <Menu />
      </Container>
      <Container>
        <CountDown />
      </Container>

      <Container> 
        <MainForm />
      </Container>

      <Container> 
        <Footer />
      </Container> */}
  //   </>
  // );
}

// export { App }; || export default App;
