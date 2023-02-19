import React from "react";
import LOGO from "./SRMLogo.png"
import {Link} from "react-router-dom"
function Teachers(){
    return(
        <>
        <div className="Upper">
    <img className="Logo" src={LOGO}></img>
        <Link to="/" className="Link">
        <div className="Back">
            <h1>Go Back</h1>
        </div>
        </Link>
        </div>
    <div className='Page'>
    <div className='ButtonContainer2'>
    
    </div>
    </div>
    </>
  );
}
export default Teachers;