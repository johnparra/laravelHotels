import { useEffect, useState } from 'react';
import data from '../services/ApiHotel';

export const useFetchHotels = () => {
 
    const [hotels, setHotels] = useState([]);
    const [isLoading, setIsLoading] = useState( true );

    const getHotels = async() => {
        const {data: newHotel} = data;
        setHotels(newHotel);
        setIsLoading(false);
    }
    
    useEffect( () => {
        getHotels();
    }, []);



    return {
        hotels,
        isLoading
    }

}