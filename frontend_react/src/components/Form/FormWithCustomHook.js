import { useEffect } from 'react';
import { useForm } from '../../hooks/useForm';


export const FormWithCustomHook = () => {

    const { formState, onInputChange, onResetForm, hotelname, address, city, nit, room_number } = useForm({
        hotelname: ''
        ,address: ''
        ,city: ''
        ,nit: ''
        ,room_number: ''
   });

    // const { username, email, password } = formState;
  

    return (
        <>
            <h1>Registrar Hotel</h1> 
            <hr />

            <input 
                type="text" 
                className="form-control"
                placeholder="Hotel Dann Carlton"
                name="hotelname"
                value={ hotelname }
                onChange={ onInputChange }
            />

            <input 
                type="text" 
                className="form-control mt-2"
                placeholder="Cr 22 # 43 - 34"
                name="address"
                value={ address }
                onChange={ onInputChange }
            />

            <input 
                type="text" 
                className="form-control mt-2"
                placeholder="Bogotá"
                name="city"
                value={ city }
                onChange={ onInputChange }
            />
            
            <input 
                type="text" 
                className="form-control mt-2"
                placeholder="1243245-0"
                name="nit"
                value={ nit }
                onChange={ onInputChange }
            />
            
            <input 
                type="text" 
                className="form-control mt-2"
                placeholder="23"
                name="room_number"
                value={ room_number }
                onChange={ onInputChange }
            />


            <button onClick={ onResetForm } className="btn btn-primary mt-2">Borrar</button>

        </>
    )
}