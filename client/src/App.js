import './App.css';
import LOGO from "./SRMLogo.png"
import {Route,Routes,BrowserRouter,Link} from "react-router-dom";
function App() {
  return (
    <>
    <img className="Logo" src={LOGO}></img>
    <div className='Page'>
    <div className='ButtonContainer'>
      <Link className="Link"to="Teachers">
    <div className='Button'>
      View Teachers
      </div>
      </Link>
    <div className='Button'>
      View Cameras
    </div>
    </div>
    </div>
    </>
  );
}

export default App;
