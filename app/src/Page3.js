import axios from "axios"
import React, { useEffect, useState } from "react"
import { useParams } from "react-router-dom"

const Timetable = () => {
  const [periods, setPeriods] = useState([])
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
        return <div className="">{period.section}</div>
      })}
    </div>
  )
}

export default Timetable
