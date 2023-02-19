import React, { useEffect } from "react"
import LOGO from "./SRMLogo.png"
import { Link } from "react-router-dom"
import axios from "axios"

function Teachers() {
  useEffect(() => {
    const get_teachers = async () => {
      try {
        const url = "http://localhost:8000/api/teachers"
        const resp = await axios.get(url, {})
        console.log(resp)
      } catch (error) {
        console.log(error)
      }
    }
    get_teachers()
  }, [])
  return (
    <>
      <div className="Upper">
        <img className="Logo" src={LOGO}></img>
        <Link to="/" className="Link">
          <div className="Back">
            <h1>Go Back</h1>
          </div>
        </Link>
      </div>
      <div className="Page">
        <div className="ButtonContainer2">
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
  )
}
export default Teachers

/*
hi wc ishaan here
just trying out the api 
dont worry about it, ill try to make it not interfere with code


its working perfectly less gooooooooo
ill implement the fetching infront of you
the backend is done well enough i think (we can tinker later)
i need to add filters as per requirements to make ux better



TODO:
1)dynamically render all teachers
2)make dynamic links for their periods on timw table
3)design the timetable


*/
