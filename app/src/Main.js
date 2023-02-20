import React from "react"
import { BrowserRouter, Route, Routes } from "react-router-dom"
import App from "./App.js"
import Teachers from "./Page2.js"
import Timetable from "./Page3.js"
function Page() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<App />} />
        <Route path="Teachers" element={<Teachers />} />
        <Route path="Teachers/Timetable/:Teacher_id" element={<Timetable />} />
      </Routes>
    </BrowserRouter>
  )
}

export default Page

/*
figure out dynamic routing and useparams
*/
