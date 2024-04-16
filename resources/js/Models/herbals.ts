export type Herbal = {
    id: number,
    name: string,
    latin_name: string,
    hrb_properties: Array<HrbProperty>,
  } 
  
  export type HrbProperty = {
    id: number,
    name: string,
    
  }