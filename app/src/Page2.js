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
        <div className="TableDiv">
    <table>
        <tr>
            <th>Teacher Name</th>
            <th>Teacher ID</th>
            <th>Time Table Link</th>
        </tr>
        <tr>
            <td>K Janani</td>
            <td>2423427834</td>
            <td>Link</td>
        </tr>
    </table>
        </div>
    </div>
    </div>
    </>
  );
}
export default Teachers;