import { FormWithCustomHook } from "./components/Form/FormWithCustomHook"
import { HotelGrid } from "./components/Form/Grid/Hotel"

export const HotelsApp = () => {
  return (
    <>
        <h1>HotelsApp</h1>
        <FormWithCustomHook />
        <HotelGrid />
    </>
  )
}
