import axios from "axios"
import React, { useEffect, useState } from "react"
import { useParams } from "react-router-dom"

const Timetable = () => {
  const [periods, setPeriods] = useState([])
  const [name, setName] = useState('')
  const params = useParams()

  useEffect(() => {
    const get_timetable = async () => {
      try {
        const url = "http://localhost:8000/api/timetable"
        await axios.post(url, { teacher_id: params.Teacher_id }).then((res) => {
          console.log(res.data)
          let timetable = []
          res.data.forEach((element) => {
            timetable.push(element)
          })
          setPeriods(timetable)
          setName(res.data.teacher)
        })
      } catch (error) {
        console.log(error)
      }
    }
    get_timetable()
  }, [params])

  return (
    <div>
      
      {/* make the time table cards here */}
      {periods.map((period, i) => {
        return (
          <div className="Page3_column">
            <h1 className="">Teacher: {period.teacher}</h1>
            <h1 className="">Section: {period.section}</h1>
            <h1 className="">Subject: {period.subject}</h1>
            <h1 className="">Day Order: {period.day_order}</h1>
            <h1 className="">Class Start: {period.class_start}</h1>
            <h1 className="">Class End: {period.class_end}</h1>
          </div>
        )
      })}
    </div>
  )
}

export default Timetable
