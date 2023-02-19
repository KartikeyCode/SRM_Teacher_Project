import React from "react";
import {BrowserRouter,Route,Routes} from "react-router-dom";
import App from "./App.js";
import Teachers from "./Page2.js";
function Page(){
    return(
        <BrowserRouter>
    <Routes>
        <Route  path="/" element={<App/>}/>
        <Route path="Teachers" element={<Teachers/>}/>
    </Routes>
    </BrowserRouter>
    )
}
export default Page;